<!DOCTYPE html>
<html>
  
<head>
    <title>Student login Page</title>
</head>
  
<body>
    <center>
    <?php

        //require_once "session_stu.php";
        
        $conn1 = mysqli_connect("localhost", "root", "", "erp_system", "3306");
                
        // Check connection
        if($conn1 === false){
            die("ERROR: Could not connect. "
            . mysqli_connect_error());
        }

        session_start();
        $_id=$_SESSION["id"];
        //echo $_SESSION["id"];
        
        $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
        $result = mysqli_query($conn1,$sql);
        
        while ($row = $result->fetch_assoc()) {
            $clg_name2= $row['clg_name'];
        }
        //echo "<center><h1>Welcome to $clg_name2!! </h1></center><hr>";

        
        mysqli_close($conn1);
    ?>
    <?php

    require_once "session_stu.php";

    $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "3306");

    if($conn === false){
          die("ERROR: Could not connect. "
          . mysqli_connect_error());
    }

    $stu_id =  $_REQUEST['stu_id'];
    $pass = $_REQUEST['pass'];

    $sql = "SELECT * FROM stu_info WHERE stu_id = '$stu_id' AND pass = '$pass'";
    //echo "$sql \n";
    $result = mysqli_query($conn,$sql);

    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }


    if(mysqli_num_rows($result) ===1 )
    {
         $row = mysqli_fetch_assoc($result);

        if($row['stu_id'] === $stu_id && $row['pass'] === $pass){
            echo "<h3> Successfully Login!!! </h3>"; 
            $_SESSION["stu_id"] = $row['stu_id']; 
            echo nl2br("\n $username\n $password");

            Redirect('stu1.php', false);

        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
    else{
        echo"<h3>Username or Password is Incorrect! </h3>";
    }

mysqli_close($conn);

?>
    </center>
</body>
  
</html>