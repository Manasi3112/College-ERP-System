<html>
  <head>
		<style>
			body{
    padding: 0;
    margin: 0;
    background: #17202A ;
}

footer{
    background:#EBF5FB;
    justify-content: flex-end;
    height: 130px;
    text-align:center
}
.background-radial-gradient {
      height:100%;
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

			#header{
				background-color: White;
				width:100%;
				height:110px;
			}
			#link{
			font-size: 20px;
			padding :0px 480px 0px 500px;
			}
			li {
 				 float: center;
				}
            li a {
  				display: block;
  				color: white;
  				text-align: center;
  				padding: 16px 16px;
  				text-decoration: none;
				}
			li a:hover {
  				background-color: #f2cf62;
               
			}
			ul {
 				 list-style-type: none;
  				 margin: 0;
  				 padding: 10px 35px 0px 50px;
  				 overflow: hidden;
  				 background-color: #333;
                   
            }
            #main{
				float:left;
				width:100%;
				height: 200px;
				background-color: gray;
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

		</style>
		<title>Admin-Page
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
	</head>
	<body>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
            
	<div id="header">
            <center>

            <h1>
                <hr>
                Welcome Administrator! 
                
            </h1>
			
        </center>
		<h2 style="text-align: right"><a href= "login_as.php">Log Out</a></h2>
		</div>

		
		<section class="background-radial-gradient overflow-hidden">
			<hr>
			<center>
            <hr>
			<h1 style="padding :0px 0px 0px 220px;">
			</h1>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "erp_system","3306");
          
				// Check connection
				if($conn === false){
					die("ERROR: Could not connect. "
					. mysqli_connect_error());
				}

				session_start();
				$_id=$_SESSION["id"];
				//echo $_SESSION["id"];
				
				$sql = "SELECT clg_name FROM college_details WHERE id=$_id";
				$result = mysqli_query($conn,$sql);
				
				while ($row = $result->fetch_assoc()) {
					$clg_name2= $row['clg_name'];
				}
				echo "<h1>$clg_name2</h1>";

				
				mysqli_close($conn);
			?>
			<div id="link">
				<nav>
				<ul>
                        <!--<li><a href="#">Login</a></li>-->
                        <li><a href="add_stud_info.php">Add Student Info</a></li><br>
                        <li><a href="add_fac_info.php">Add Faculty Info</a></li><br>
                        <li><a href="about_clg_info.php">Add About College Info</a></li><br>
  						
					    
                        <!--<li><h3 style="color:white">I2IT</h3></li>-->
                        
				</ul></nav>
			</div>
			
            

			</center>
			</section>
	
	</body>
	<footer>
<br>

<h2>Contact Info</h2>

<h6>www.collegeerp.com</h6>
<h6><b>WT MINI PROJECT</b></h6>
</footer>
</html>