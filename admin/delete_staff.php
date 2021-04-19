<?php
include('../connect.php');
$staff_no = $_GET['id'];
//Delete Staff Details
$sqld = "DELETE FROM staff_details WHERE staff_no = ?";
$delete = $conn->prepare($sqld);
$delete->execute(array($staff_no));
//User Admin Exist
$sqla = "SELECT * FROM admin WHERE staff_no = ?";
$querya = $conn->prepare($sqla);
$querya->execute(array($staff_no));
$rowa = $querya->fetch();
$count = $querya->rowCount();
//User Staff Exist
$sqls = "SELECT * FROM staff_user WHERE staff_no = ?";
$querys = $conn->prepare($sqls);
$querys->execute(array($staff_no));
$rows = $querys->fetch();
$count1 = $querys->rowCount();
//Staff User
if($count>0){
$sqld = "DELETE FROM admin WHERE staff_no = ?";
$delete = $conn->prepare($sqld);
$delete->execute(array($staff_no));
}//Details in Admin
//Other User
elseif($count1>0){
$sqld = "DELETE FROM staff_user WHERE staff_no = ?";
$delete = $conn->prepare($sqld);
$delete->execute(array($staff_no));
}//other user
//leave
else{
	$sql2 = "SELECT * FROM staff_details WHERE staff_no = ?";
$query2 = $conn->prepare($sql2);
$query2->execute(array($staff_no));
$row2 = $query2->fetch();
$count2 = $query2->rowCount();
if($count2==0){echo"<script>alert('Staff Deleted Successfully')</script>";
echo"<script>window.location.href='staff.php'</script>";}//deleted
else{echo"<script>alert('Staff Not Deleted')</script>";
echo"<script>window.location.href='staff.php'</script>";}//not deleted
}

?>