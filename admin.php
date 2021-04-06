<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Admin</title>  
</head>   
  <style>
  body{
      background-color: beige;
  }
</style>
<body>  
  
<div class="container vh-100">
    <div class="row justify-content-center h-100">
     <div class="card w-30 my-auto shadow">
     <div class="card-header text-center bg-secondary">
        <h2>Admin Login</h2>
     </div>
      <div class="card-body">
       <form action="admin.php" method="post">
         <div class="form-group">
         <i class="fas fa-user"></i> <label for="username">Username</label>
          <input type="username" class="form-control" id="username" name="username" required>
         </div>
         <div class="form-group">
         <i class="fas fa-unlock"></i> <label for="admin_pass">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
         </div><br>

         <input type="submit" class="button btn-primary w-100" value="Login">
       </form> 

      </div>
     </div>
    </div>

  </div>
</div>
  
<?php    
  
$username = $_POST['username'];
$password = $_POST['password'];

$con= new mysqli("localhost","root","","mydb");
if ( $con->connect_error) {
	die("Failed to connect to MySQL: " .$con->connect_error);
} else {}
    $stmt = $con->prepare("select * from admin where username = ?");
        $stmt-> bind_param("s", $username);
        $stmt-> execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result-> fetch_assoc();
            if ($data['password']=== $password)
            {
                echo "<script>window.open('admin/admin_dashboard.php','_self')</script>";
               $_SESSION['username']=$username; 
    } else
     {  
      echo "<script>alert('Username or password is incorrect!')</script>";
      echo "<script>window.open('admin/admin.php','_self')</script>";
    }  //redirect to login page
}  
  
?>  