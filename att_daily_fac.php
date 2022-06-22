<html>
  <head>
		<style>
			table, th, td {
 				 border: 1px solid black;
                  width:30%
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
            <h1>Daily Attendance</h1>
            
            
			<?php
			
		
			

            $records = mysqli_query($conn,"select * from stu_info"); // fetch data from database
			
			
			?>
			
			<table>
					<tr>
					<th>Student ID </th>
					<th>Student Name</th>
					<th>Attendance</th>
					
			</tr>
             
			<form action="att_daily_fac.php" method=POST>
            <label for="date">Date  </label>     
            <input type="date" name="date1" id="from-datepicker" value="yyyy-mm-dd"/>  
            <script> 
            $( document ).ready(function() {     
            $("#from-datepicker").datepicker({          
            format: 'yyyy-mm-dd' //can also use format: 'dd-mm-yyyy'     
            });      
            });  
            </script> 
				 
            
            <br><br>
            <?php
            // $date2=$_REQUEST["date1"];
			// $sql = "ALTER TABLE stu_att ADD '$date2' DATE";
            
            // if(mysqli_query($conn, $sql)){
            //     echo "<h3>Insert created successfully!!!</h3>"; 
                
            //                 //echo nl2br("\n$id\n $clg_name\n $course\n "
            //                 // . "$no_of_branches\n $password\n $username \n $reenter_password");
            //                 //Redirect('att_fac.php', false);
            //             } 
            //         else{
            //                 echo "ERROR: Hush! Sorry $sql. " 
            //                     . mysqli_error($conn);
            //             }
			while($data = mysqli_fetch_array($records))
            {
            ?>
            
			<table>
			<tr>
				<td><?php echo $data['stu_id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td>
				<input type="checkbox" id="present" name="present" value="P">
				<label for="present">P</label>
				
				<input type="checkbox" id="absent" name="absent" value="A">
				<label for="absent">A</label>
			</td>

			</tr>
			</table>
			</table>
           	<?php
            error_reporting(E_ERROR | E_PARSE);
            
            
        $present = $_POST['present']; 
		$absent = $_POST['absent']; 
		
			
			if(isset($_POST['present'])){
				echo "BYEEE";
				$sql = "INSERT INTO stu_att values ('$data[stu_id]',1)";
			}
			if(isset($_POST['absent']))
			{
				echo "HIIII";
				$sql = "INSERT INTO stu_att values ('$data[stu_id]',0)";	
			}
				
            echo isset($_POST['present']);
            
            
            if(mysqli_query($conn, $sql)){
				//echo $_POST['present'];
                //echo "<h3>Insert created successfully!!!</h>$present"; 
                
                            //echo nl2br("\n$id\n $clg_name\n $course\n "
                             //. "$no_of_branches\n $password\n $username \n $reenter_password");
                            //Redirect('att_fac.php', false);
                        } 
                    else{
                            echo "ERROR: Hush! Sorry $sql. " 
                                . mysqli_error($conn);
                        }
                    }?>
			<br><br>
			<input type="submit" value="Submit">
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