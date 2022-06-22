<!DOCTYPE html>
<html>
  
<head>
    <title>add student page</title>
</head>
  
<body>
    <center>
    <?php

        require_once "session.php";
  
  
     $conn = mysqli_connect("localhost", "root", "", "erp_system", "3306");

    if($conn === false){
          die("ERROR: Could not connect. "
          . mysqli_connect_error());
    }

    session_start();
        $_id=$_SESSION["id"];
        //echo $_SESSION["id"];
        
        $sql = "SELECT clg_name FROM college_details WHERE id=$_id";
        $result1 = mysqli_query($conn,$sql);
        
        while ($row = $result1->fetch_assoc()) {
            $clg_name2= $row['clg_name'];
        }
    mysqli_close($conn);

    $conn = mysqli_connect("localhost", "root", "", "$clg_name2", "3306");

    //if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $stu_id =  $_REQUEST['stu_id'];
        $password = $_REQUEST['pass'];
        $name = $_REQUEST['name'];
        $branch = $_REQUEST['branch'];
        $class = $_REQUEST['class'];
        $prn = $_REQUEST['prn'];


        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
            exit();
        }

        $sql = "INSERT INTO stu_info VALUES ('$stu_id','$password','$name','$branch','$class','$prn')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Table added succesfully!! </h3>"; 
  
            //echo nl2br("\n$id\n $clg_name\n $course\n "
            //    . "$no_of_branches\n $password\n $username \n $reenter_password");
            Redirect('add_stud_info3.php', false);
        } 

        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        

        mysqli_close($conn);
//}

?>
    </center>
</body>
  
</html>