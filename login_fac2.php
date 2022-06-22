<!DOCTYPE html>
<html>
  
<head>
    <title>Faculty login Page</title>
</head>
  
<body>
    <center>
    <?php

        require_once "session_fac.php";

		$conn = mysqli_connect("localhost", "root", "", "erp_system", "3306");
          
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
		//echo "<h1>$clg_name2</h1>";

				
		mysqli_close($conn);
    ?>
    <?php

        $conn1 = mysqli_connect("localhost", "root", "", "$clg_name2", "3306");

        if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $sql = "SELECT * FROM faculty_info WHERE fac_id = '$username' AND pass = '$password'";
        $result1 = mysqli_query($conn1,$sql);

        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
            exit();
        }


    if(mysqli_num_rows($result1) ===1 )
    {
        //$sql = "INSERT INTO college_details  VALUES ('$id','$clg_name','$course','$no_of_branches','$password','$reenter_password')";
        //$sql = "CREATE DATABASE $clg_name";
        $row = mysqli_fetch_assoc($result1);

        if($row['fac_id'] === $username && $row['pass'] === $password){
            echo "<h3> Successfully Login!!! </h3>";
            $_SESSION["fac_id"] = $row['fac_id']; 
            echo nl2br("\n $username\n $password");

            Redirect('fac1.php', false);

        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn1);
        }
    }
    else{
        echo"<h3>Username or Password is Incorrect! </h3>";
    }

mysqli_close($conn1);

?>
    </center>
</body>
  
</html>