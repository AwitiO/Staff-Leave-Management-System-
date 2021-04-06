<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Employee Leave Management</title>

		<script src="https://kit.fontawesome.com/0e62e3bdc9.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<style>
  body{
      background-color: beige;
  }
</style>

	<body>

  <div class="container vh-100">
    <div class="row justify-content-center h-100">
     <div class="card w-25 my-auto shadow">
     <div class="card-header text-center bg-secondary">
        <h2>Employee Login</h2>
     </div>
      <div class="card-body">
       <form action="login.php" method="post">
         <div class="form-group">
         <i class="fas fa-user"></i> <label for="username">Username</label>
          <input type="username" class="form-control" id="username" name="username" required>
         </div>
         <div class="form-group">
         <i class="fas fa-unlock"></i> <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
         </div><br>

         <input type="submit" class="button btn-primary w-100" value="Login">
       </form> 
       <br>
      <a href="mailto;ochiengcatherine@zetech.co.ke">Forgot Password</a>
      <br>
      <a href="register.php">Register Here</a>
      </div>

      <div class="card-footer">
       <small>&copy; Catherine Awiti</small>
      </div>
     </div>
    </div>

  </div>
</div>
	</body>
  
</html>
