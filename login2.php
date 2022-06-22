<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
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

    //if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $clg_name =  $_REQUEST['clg_name'];
        $password = $_REQUEST['password'];

        $sql = "SELECT * FROM college_details WHERE clg_name = '$clg_name' AND password = '$password'";
        //echo "$sql \n";
        $result = mysqli_query($conn, $sql);

        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
            exit();
        }


        if (mysqli_num_rows($result) ===1) {
            //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$password','$reenter_password')";
            //$sql = "CREATE DATABASE $clg_name";
            $row = mysqli_fetch_assoc($result);

            if ($row['clg_name'] === $clg_name && $row['password'] === $password) {
                echo "<h3> Successfully Login!!! </h3>";
                $_SESSION["id"] = $row['id'];
                //$_SESSION["user"] = $row;
                echo nl2br("\n $clg_name\n $password");

                Redirect('login_as.php', false);


            //Redirect('login.php', false);
            } else {
                echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
            }
        } else {
            echo"<h3>Password is Incorrect! </h3>";
        }

        mysqli_close($conn);
//}

?>
    </center>
</body>
  
</html>