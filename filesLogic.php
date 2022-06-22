<?php
// connect to the database
$db = mysqli_connect("localhost", "root", "", "erp_system", "8279");

  session_start();
        $_id=$_SESSION["id"];
        //echo $_SESSION["id"];
        
        $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
        $result = mysqli_query($db,$sql);
        
        while ($row = $result->fetch_assoc()) {
          $clg_name2= $row['clg_name'];
        }
        //echo "<h1>$clg_name2</h1>";

        
        mysqli_close($db);
    
    $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "8279");


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}