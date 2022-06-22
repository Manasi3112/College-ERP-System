<html>
  <head>
		<style>
			table, th, td {
 				 border: 1px solid black;
			}
			#header{
				background-color: White;
				width:100%;
				height:180px;
			}
			#link{
			font-size: 20px;
			padding :0px 0px 0px 700px;
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

		</style>
	</head>
	<body>
		<div id="header">

            <hr>
			<!--<h1 style="padding :0px 0px 0px 220px;">-->
			
			<?php
            $conn1 = mysqli_connect("localhost", "root", "", "erp_system");

            session_start();
                          $_id=$_SESSION["id"];
                          //echo $_SESSION["id"];
                          
                          $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
                          $result = mysqli_query($conn1,$sql);
                          
                          while ($row = $result->fetch_assoc()) {
                              $clg_name2= $row['clg_name'];
                          }
                          //echo "<h1>$clg_name2</h1>";
          
                          
                          
              
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2");
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
  						<li><a href="#news.fac.php">Fees</a></li>
						<li><a href="att_fac.php">Attendance</a></li>
  						<li><a href="news_fac.php">News</a></li>
					    <li><a class="active" href="fac1.php">Details</a></li>
				</ul></nav>
			</div>
		</div>

		<div id="main">
			<hr>

			<center>
            <h1>Attendance Section</h1>

            <form action="att_fac2.php" method="post">
 
            
            <div>
                Student ID: <input type="number" placeholder="Enter Stu_ID" name="stu_id" required/><br/>
		    	Attendance: <input type="text" placeholder="Enter Attendance " name="attendance" required/><br/>
			
            </div>
            
            <input type="submit" name="submit" value="Submit">
            </form>
			
            
			




			</center>

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