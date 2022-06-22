<html>
  <head>
		<style>
			
            .dropdown {
                position: static;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: white;
                min-width: 150px;
                box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {   
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #ddd;}

            .dropdown:hover .dropdown-content {display: block;}

     		

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
.navbar{
    background:#EBF5FB  
;
}
.nav-link,
.navbar-brand {
    color: #17202A ;
    cursor: pointer;
}
.nav-link {
    margin-right: 1em !important;
}
.nav-link:hover {
    color: #000 ;
}
.navbar-collapse{
    justify-content: flex-end;
}
.image{
    height:100px;
	width:100px;
    padding-left:400px;
    align-items: right;
        justify-content: right;
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

	</style>
	<title>Login College
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
	</head>
	<body>
		<?php
	session_start();?>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<nav class="navbar navbar-expand-md">
	    <a class="navbar-brand" href="#"><img src="images/AADM_Symbol.png" alt="My image"
			height="80"
			width="100"></a>
	    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
		    <span class="navbar-toggler-icon"></span>
	    </button>
        <div class="collapse navbar-collapse" id="main-navigation">
        
            <ul class="navbar-nav">
            <!-- <div class="dropdown">
                            <!--<button class="dropbtn">Dropdown</button>
                            <li class="nav-item"><a href="#">Login</a></li>
                            <div class="dropdown-content">
                                <a href="login_stu.php">Login as Student</a>
                                <a href="login_fac.php">Login as Faculty</a>
                                <a href="admin1.php">Login as Admin</a>
                            </div> -->
                <div class="dropdown">
                <li class="nav-item">
                
                    <a class="nav-link" href="#">Login</a>
                </li>
                
                <div class="dropdown-content">
                                <a href="login_stu.php">Login as Student</a>
                                <a href="login_fac.php">Login as Faculty</a>
                                <a href="admin1.php">Login as Admin</a>
                            </div>
                            </div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


		<div id="main">
			<hr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "erp_system", "3306");
          
				// Check connection
				if($conn === false){
					die("ERROR: Could not connect. "
					. mysqli_connect_error());
				}
			
			
				$_id=$_SESSION["id"];
				//echo $_SESSION["id"];
				
				$sql = "SELECT clg_name FROM college_details WHERE id=$_id";
				$result = mysqli_query($conn,$sql);
				
				while ($row = $result->fetch_assoc()) {
					$clg_name2= $row['clg_name'];
				}
				echo "<center><h1>Welcome to $clg_name2!! </h1></center><hr>";
			
				
				mysqli_close($conn);
				?>
			<center>
			<img src="images/I2IT.jpeg"  alt="My image"

			height="550"
			width="1000"
			 ></center>

		</div>
		<footer>
<br>

<h2>Contact Info</h2>

<h6>www.collegeerp.com</h6>
<h6><b>WT MINI PROJECT</b></h6>
</footer>
	</body>
</html>