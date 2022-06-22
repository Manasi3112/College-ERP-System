<!DOCTYPE html>
<html>
  
<head>
    <title>add faculty page</title>
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
        $fac_id =  $_REQUEST['fac_id'];
        $password = $_REQUEST['pass'];
        $name = $_REQUEST['name'];
        $branch = $_REQUEST['branch'];
        $class = $_REQUEST['class'];
        $subject = $_REQUEST['subject'];
        

        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
            exit();
        }

        $sql = "INSERT INTO faculty_info VALUES ('$fac_id','$password','$name','$branch','$class','$subject')";


        if(mysqli_query($conn, $sql)){
            //echo "<h3>values added in Table succesfully!! </h3>"; 
            
            Redirect('add_fac_info3.php', false);
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