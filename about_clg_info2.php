<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "erp_system", "3306");

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
    
    $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "3306");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO clg_info (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($conn, $sql);
    function Redirect($url, $permanent = false)
    {
          header('Location: ' . $url, true, $permanent ? 301 : 302);

          exit();
    }

  	if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
  		//$msg = "Image uploaded successfully";
		
        
  	}else{


		$msg = "Failed to upload image";
  	}
  }
  Redirect('about_clg_info3.php', false);
  $result = mysqli_query($conn, "SELECT * FROM images");
  mysqli_close($conn);
?>