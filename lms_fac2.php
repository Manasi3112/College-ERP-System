<?php
  // Create database connection
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

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
    // Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	

  	// image file directory
  	$target = "images/".basename($file);
    $faculty_id=$_SESSION["fac_id"];

    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($conn, $sql);
    

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		
        
  	}else{


		$msg = "Failed to upload image";
  	}
  }
  //Redirect('about_clg_info3.php', false);
  $result = mysqli_query($conn, "SELECT * FROM images");
  //mysqli_close($conn);
?>