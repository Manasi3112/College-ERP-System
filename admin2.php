<!DOCTYPE html>
<html>
  
<head>
    <title>Admin login Page</title>
</head>
  
<body>
    <center>
    <?php
  
  
    $conn = mysqli_connect("localhost", "root", "", "erp_system", "3306");

    if($conn === false){
          die("ERROR: Could not connect. "
          . mysqli_connect_error());
    }

    $username =  $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $sql = "SELECT * FROM college_details WHERE username = '$username' AND password = '$password'";
    //echo "$sql \n";
    $result = mysqli_query($conn,$sql);

    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }


    if(mysqli_num_rows($result) ===1 )
    {
        //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$password','$reenter_password')";
        //$sql = "CREATE DATABASE $clg_name";
        $row = mysqli_fetch_assoc($result);

        if($row['username'] === $username && $row['password'] === $password){
            echo "<h3> Successfully Login!!! </h3>"; 
            echo nl2br("\n $username\n $password");

            Redirect('admin_page.php', false);

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