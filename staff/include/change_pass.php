<?php
if (isset($_POST['change_pass'])){
$staff_no= $_POST['staff_no'];
$old_pass = md5($_POST['old_pass']);
$new_pass =$_POST['new_pass'];
$conf_pass =$_POST['conf_pass'];
if($new_pass!=$conf_pass){ echo"<script>alert('Match the Password')</script>";}
else{
$password=md5($new_pass);
$sql= "SELECT * FROM staff_user WHERE staff_no= ?  ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row= $query->fetch();
$original_pass=$row['password'];
if($old_pass!=$original_pass){echo"<script>alert('Enter the Correct Currect password')</script>";}
else{ 
$update = "UPDATE staff_user SET password = ? WHERE staff_no = '$staff_no'";
$query1 = $conn->prepare($update);
$query1->execute(array($password));
echo"<script>alert('Password Sucessfully Updated')</script>";
echo"<script>window.location.href='dashboard.php'</script>";}
}}
?>