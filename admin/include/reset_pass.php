<?php 
include('connect.php');
$staff_no = $_GET['id'];
//CHECK IF USER EXISTS
$sql= "SELECT * FROM admin WHERE staff_no= ?  ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row= $query->fetch();
$count = $query->rowCount();
if($count>0){  
    $password=md5(1234);
    $query = $conn->prepare("UPDATE admin SET password= ? WHERE staff_no= '$staff_no'"); 
    $query->execute(array($password));
    $sql4= "SELECT * FROM admin WHERE staff_no= ?  AND password=? ";
    $query4 = $conn->prepare($sql4);
    $query4->execute(array($staff_no,$password));
    $row4= $query4->fetch();
    $count4 = $query4->rowCount();
    if($count4>0){echo"<script>alert('Password Reset Successfull')</script>";
        echo"<script>window.location.href='../users.php'</script>";}
    else{echo"<script>alert('Password Reset Not Successfull')</script>";
        echo"<script>window.location.href='../users.php'</script>";}
     }//IF USER Maybe in STAFF EXISTS
else{
//CHECK IF USER EXISTS
$sqls= "SELECT * FROM staff_user WHERE staff_no= ?  ";
$querys = $conn->prepare($sqls);
$querys->execute(array($staff_no));
$rows= $querys->fetch();
$counts = $querys->rowCount();
if($counts>0){
    $password=md5(1234);
    $query = $conn->prepare("UPDATE staff_user SET password= ? WHERE staff_no= '$staff_no'"); 
    $query->execute(array($password));
    $sql4= "SELECT * FROM staff_user WHERE staff_no= ?  AND password=? ";
    $query4 = $conn->prepare($sql4);
    $query4->execute(array($staff_no,$password));
    $row4= $query4->fetch();
    $count4 = $query4->rowCount();
    if($count4>0){echo"<script>alert('Password Reset Successfull')</script>";
        echo"<script>window.location.href='../users.php'</script>";}
    else{echo"<script>alert('Password Reset Not Successfull')</script>";
        echo"<script>window.location.href='../users.php'</script>";}
}
else{echo"<script>alert('User Does Not Exists')</script>";
    echo"<script>window.location.href='../users.php'</script>";}//DOESNOT EXIST
}
?>