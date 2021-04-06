<?php  

$dbcon=mysqli_connect("localhost","root","","mydb");  
if($con->connect_error){
    die("connection failed:" .$con->connect_error);
}

?>   