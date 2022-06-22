<html>
  <head>
		<style>
			#header{
				background-color: White;
				width:100%;
				height:200px;
			}
			#link{
			font-size: 20px;
			padding :0px 0px 0px 400px;
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
				height: 400px;
				background-color: lightblue;
				padding : 0px 0px 100px 0px;
			}


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
	</head>
	<body>
		<div id="header">

            <hr>
			<!--<h1 style="padding :0px 0px 0px 220px;">-->
			
			<?php
            $conn1 = mysqli_connect("localhost", "root", "", "erp_system", "3306");

            session_start();
                          $_id=$_SESSION["id"];
                          //echo $_SESSION["id"];
                          
                          $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
                          $result = mysqli_query($conn1,$sql);
                          
                          while ($row = $result->fetch_assoc()) {
                              $clg_name2= $row['clg_name'];
                          }
                          //echo "<h1>$clg_name2</h1>";
          
                          
                          
              
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "3306");
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
						<li><a href="data-list.php">Student</a></li>
						<li><a href="lms_fac.php">LMS</a></li>
  						<li><a href="#Contact">Fees</a></li>
						<li><a href="attendance.php">Attendance</a></li>
  						<li><a href="news_fac.php">News</a></li>

					    <li><a class="active" href="fac1.php">Details</a></li>
				</ul></nav>
			</div>
		</div>

	
		<section class="background-radial-gradient overflow-hidden">
    

			<hr>
			<center>
            <!--Fetching faculty details from college database faculty_info table-->
            <?php
			$faculty_id=$_SESSION["fac_id"];
            $sql = "SELECT name, branch, class, suject FROM faculty_info WHERE fac_id = $faculty_id";
            $result1 = mysqli_query($conn,$sql);

            while ($row = $result1->fetch_assoc()) {
                $name1= $row['name'];
                $branch1= $row['branch'];
                $class1= $row['class'];
                $subject1= $row['suject'];
            }
            echo "<center><h1>Welcome $name1</h1></center><hr><br>";
			echo "<center><h3>Faculty ID: $faculty_id</h3></center>";
			echo "<center><h3>Branch: $branch1</h3></center>";
			echo "<center><h3>Class: $class1</h3></center>";
			echo "<center><h3>Subject: $subject1</h3></center>";
			?>

			</center>

		</div>
		
	</body>
</html>