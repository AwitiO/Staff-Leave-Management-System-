
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e62e3bdc9.js" crossorigin="anonymous"></script>
</head> 
<style>
  body{
      background-color: beige;
  }
</style>
<body>  
  
<div class="container vh-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-6 col-md-offset-6">
                <div class="panel-heading">  
                    <h3 class="panel-title">Employee Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="index.php">    
                            <div class="form-group">  
                                <input class="form-control" placeholder="firstname" name="fname" type="text"required>  
                            </div>  
                             <br>
							 <div class="form-group">  
                                <input class="form-control" placeholder="lastname" name="lastname" type="text" required>  
                            </div>  
                             <br>
							 <div class="form-group">  
                                <input class="form-control" placeholder="username" name="username" type="text" required>  
                            </div>  
                             <br>
                            <div class="form-group">  
                                <input class="form-control" placeholder="e-mail" name="email" type="email" required>  
                            </div>  <br>
                            <div class="form-group">  
                                <input class="form-control" placeholder="password" name="password" type="password" id="password">  
                            </div>  
							<br>
                           <input class="btn btn-lg btn-primary btn-block w-100" type="submit" value="Register" name="Register" >
                    </form>  
                    <br>
                    <center><b>Already registered ?</b> <br></b><a href="index.php">Login here</a></center>
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  include("dbc.php");
if(isset($_POST['register']))  
{  
    $firstname=$_POST['firstname'];//here getting result from the post array after submitting the form.  
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
    $password=$_POST['password'];//same  
    $email = $_POST['email'];
  
    if($firstname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter first name')</script>";  
exit();
    }  
	if($lastname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter last name')</script>";  
exit();
    }  
	if($username=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter user name')</script>";  
exit();
    }  
  
    if($password=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();   
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from registration WHERE email='$email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email already exist in our database, Please try another one!')</script>";  
exit();  
    }  
    $insert_user="insert into registration (firstname,lastname,username,password,email) VALUE ('$username','$password','$email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.php','_self')</script>";  
        $_SESSION['username']=$username; 
    }  
} 
?>  