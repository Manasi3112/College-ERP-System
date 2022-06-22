<?php
  $conn = mysqli_connect("localhost", "root", "", "erp_system", "8279");

  session_start();
        $_id=$_SESSION["id"];
        //echo $_SESSION["id"];
        
        $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
        $result = mysqli_query($conn,$sql);
        
        while ($row = $result->fetch_assoc()) {
          $clg_name2= $row['clg_name'];
        }
        //echo "<h1>$clg_name2</h1>";

        
        mysqli_close($conn);
    
    $db = mysqli_connect("localhost", "root", "", "$clg_name2", "8279");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO lms (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "File uploaded successfully";
  	}else{
  		$msg = "Failed to upload file";
  	}
  }
  //$result = mysqli_query($db, "SELECT * FROM lms");
?>
<!DOCTYPE html>
<html>
<head>
<title>LMS</title>
<style type="text/css">
    #header{
				background-color: White;
				width:100%;
				height:180px;
			}
			#link{
			font-size: 18px;
			padding :0px 0px 0px 650px;
			}
			li {
 				 float: right;
				}
            li a {
  				display: block;
  				color: white;
  				text-align: center;
  				padding: 14px 16px;
  				text-decoration: none;
				}
			li a:hover {
  				background-color: #f2cf62;
			}
			ul {
 				 list-style-type: none;
  				 margin: 0;
  				 padding: 0;
  				 overflow: hidden;
  				 background-color: #333;
}

     		#main{
				float:left;
				width:100%;
				height: 200px;
				background-color: lightblue;
				padding : 0px 0px 100px 0px;
			}


			#footer{
				clear:both;
				height: 200px;
				width: 100%;
				background-color: Black;
				color : White;


			}

			#sidebar-left, #main, #sidebar-right{
				min-height: 600px
			}
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="header">
<hr>
			<!--<h1 style="padding :0px 0px 0px 220px;">-->
			
			<?php
            $conn1 = mysqli_connect("localhost", "root", "", "erp_system", "8279");

            //session_start();
                          $_id=$_SESSION["id"];
                          //echo $_SESSION["id"];
                          
                          $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
                          $result = mysqli_query($conn1,$sql);
                          
                          while ($row = $result->fetch_assoc()) {
                              $clg_name2= $row['clg_name'];
                          }
                          //echo "<h1>$clg_name2</h1>";
          
                          
                          
              
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "8279");
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

			//session_start();
			

            $records = mysqli_query($conn,"select * from clg_info"); // fetch data from database
            


            while($data = mysqli_fetch_array($records))
            {
            ?>
            
                
                <img src= "<?php echo $data['image']; ?>" width="100" height="100">
           	
            <?php
            }
            ?>
            <?php
           


            //mysqli_close($conn1);
            //mysqli_close($conn);
            
              

            ?>
			<div id="link">
				<nav>
				<ul>
                        <li><a href="login_as.php">Log out</a></li>
						<li><a href="lms_fac.php">LMS</a></li>
  						<li><a href="#Contact">Fees</a></li>
						<li><a href="#Contact">Attendance</a></li>
  						<li><a href="#about">News</a></li>
					    <li><a class="active" href="fac1.php">Details</a></li>
				</ul></nav>
			</div>
		</div>
        <div id="main">
			<hr>
			<center>
				<h1>Upload Learning Resources here</h1>
                <div id="content">
                <form method="POST" action="lms_fac.php" enctype="multipart/form-data">
                    <h3><input type="hidden" name="size" value="1000000">
                    <div>
                    Select File<input type="file" name="image" accept=".pdf">
                    </div>
                    <div><br><br>
                    Subject Name: <textarea 
                        id="text" 
                        cols="40" 
                        rows="4" 
                        name="image_text" 
                        placeholder="Enter Subject Name"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="upload">UPLOAD</button>
                    </div>
                </form>
                </div>
        </div>
        <div id="footer">
			<br>

            <center>

			<img src="AADM_Symbol.png" alt="My image"
			height="80"
			width="100">
			<h3>Web: www.AADM.com</h3>
			<h1> <b>DBMS MINI PROJECT</b></h1>

        </center>


		</div>
</body>
</html>