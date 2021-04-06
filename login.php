<?php

$username = $_POST['username'];
$password = $_POST['password'];

$con= new mysqli("localhost","root","","mydb");
if ( $con->connect_error) {
	die("Failed to connect to MySQL: " .$con->connect_error);
} else {}
    $stmt = $con->prepare("select * from registration where username = ?");
        $stmt-> bind_param("s", $username);
        $stmt-> execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result-> fetch_assoc();
            if ($data['password']=== $password)
            {
                echo "<script>window.open('dashboard.php','_self')</script>";
               $_SESSION['username']=$username; 
    } else
     {  
      echo "<script>alert('Username or password is incorrect!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }  //redirect to login page
}  
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

