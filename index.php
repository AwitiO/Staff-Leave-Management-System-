
<?php
include('connect.php');
include('login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in :: Turkish Airlines</title>
<link rel="icon" href="dist/img/t-icon.png">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="card-header text-center" align="left" style='background-color:navy;' >
<a href="#" class="h1"><img src="dist/img/logo.png"  height="45" width="200"> </a>
</div>

<!-- /.login-logo -->
<div class="card card-outline card-primary">

<div class="card-body">
<p class="login-box-msg">Sign in to start your session</p>
<!-- form start -->
<form role="form" action="" method="post">
<div class="form-group has-feedback">
<label for="staff_no">Staff Number:</label>
<input type="text" class="form-control" id="staff_no" name="staff_no" placeholder="Enter Staff Number" required>
</div>
<div class="form-group has-feedback">
<label for="password">Password:</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
</div>
<div class="row">
<div class="col-12" align="Right">
<button type="submit" class="btn btn-success btn-block btn-flat" name="login" id="login"><b>Log in</b></button>
</div>
</div>
<br>
</form>


<!-- /.social-auth-links -->

<p class="mb-1">
<a href="mailto;ochiengcatherine@zetech.co.ke">Forgot Password</a>
</p>
<p class="mb-0">
<a href="register.php" class="text-center">Register</a>
</p>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>