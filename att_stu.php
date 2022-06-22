<html>
  <head>
		<style>
			#header{
				background-color: White;
				width:100%;
				height:200px;
			}
			#link{
			font-size: 26px;
			padding :0px 0px 0px 600px;
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


			#footer{
				clear:both;
				height: 200px;
				width: 100%;
				background-color: Black;
				color : White;


			}
	

		</style>
	</head>
	<body>
		<div id="header">
            <hr>
        <h1 style="padding :0px 0px 0px 220px;">

        <?php
            $conn1 = mysqli_connect("localhost", "root", "", "erp_system", "8279");

            session_start();
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
			$stu_id=$_SESSION["stu_id"];
            //echo "$stu_id";

            $records = mysqli_query($conn,"select Attendance from attendance where stu_id='$stu_id'"); // fetch data from database
            


           
            
            $attendance = $records;
           // echo $attendance;
                      
           	
           
            
           
        

           // mysqli_close($conn1);
            //mysqli_close($conn);
            
              

            ?>
			<div id="link">
				<nav>
				<ul>
                        <li><a href="login_as.php">Log out</a></li>
						<li><a href="#register1.php">LMS</a></li>
  						<li><a href="#Contact">Fees</a></li>
						<li><a href="#Contact">Attendance</a></li>
  						<li><a href="news_stu.php">News</a></li>
					    <li><a class="active" href="stu1.php">Details</a></li>
				</ul></nav>
			</div>
		</div>

		<div id="main">

	
			
		
		</div>
		<div id="footer">
            <center>
			<br>

			

			
			<img src="AADM_Symbol.png" alt="My image"
			height="80"
			width="100">

			</h1>
			<hr style="text-decoration-color:red">
			<h3>Web: www.AADM.com</h3>
			<h2> <b>DBMS MINI PROJECT</br></h2>

        </center>


		</div>
	</body>
</html>