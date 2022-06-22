<!DOCTYPE html>
<html>
  
<head>
    <title>Attendance Page</title>
</head>
  
<body>
    <center>
    <?php
                $conn = mysqli_connect("localhost", "root", "", "erp_system");
                    
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
                    //  echo "<h1>$clg_name2</h1>";

                    
                    mysqli_close($conn);

            ?>


        <?php
            $conn = mysqli_connect("localhost", "root", "", "$clg_name2");
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

            $date= $_REQUEST['date'];
            $stu_id = $_REQUEST['stu_id']; 
            $attendance = $_REQUEST['attendance'];


            function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);

            exit();
        }
            $sql = "INSERT INTO attendance values ('$stu_id','$attendance')";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>Insert created successfully!!!</h3>"; 
                
                            //echo nl2br("\n$id\n $clg_name\n $course\n "
                            // . "$no_of_branches\n $password\n $username \n $reenter_password");
                            Redirect('att_fac.php', false);
                        } 
                    else{
                            echo "ERROR: Hush! Sorry $sql. " 
                                . mysqli_error($conn);
                        }
            mysqli_close($conn);

        ?>
    </center>
</body>
  
</html>