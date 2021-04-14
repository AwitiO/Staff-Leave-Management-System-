<?php
include '../../connect.php';
$staff_no = $_GET['id'];
//system Ad
$sql = "SELECT * FROM admin WHERE staff_no = ?";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row = $query->fetch();
$count = $query->rowCount();
	//other Ad
$sql2 = "SELECT * FROM admin WHERE staff_no = ?";
$query2 = $conn->prepare($sql2);
$query2->execute(array($staff_no));
$row2 = $query2->fetch();
$count2 = $query2->rowCount();
if($count>0){
$status=1;
$update = $conn->prepare("UPDATE admin SET status=? WHERE staff_no= '$staff_no'");
$update->execute(array($status));
$sqld = "DELETE FROM staff_details WHERE staff_no = ?";
$delete = $conn->prepare($sqld);
$delete->execute(array($staff_no));
$sql1= "SELECT * FROM staff_details WHERE staff_no= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($staff_no));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1==0){?>echo"<script>alert('Staff Deleted Successfully')</script>";
<?php header('location:../staff.php'); }//successful Deletion
	else{ ?>
		echo"<script>alert('Staff Not Successfully Deleted')</script>";
 <?php header('location:staff.php');
	} //unsucessful
}//user active in Admin
elseif($count2>0){
	$status=1;
$update = $conn->prepare("UPDATE staff_user SET status=? WHERE staff_no= '$staff_no'");
$update->execute(array($status));
$sqld = "DELETE FROM staff_details WHERE staff_no = ?";
$delete = $conn->prepare($sqld);
$delete->execute(array($staff_no));
$sql1= "SELECT * FROM staff_details WHERE staff_no= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($staff_no));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1==0){?>echo"<script>alert('Staff Deleted Successfully')</script>";
<?php header('location:staff.php'); }//successful Deletion
	else{ ?>
		echo"<script>alert('Staff Not Successfully Deleted')</script>";
<script>window.location = '../staff.php';</script>;
; <?php
	} //unsucessful
}//search other staff
else{
$sqld = "DELETE FROM staff_details WHERE staff_no = ?";
$delete = $conn->prepare($sqld);
$delete->execute(array($staff_no));
?>echo"<script>alert('Staff Deleted Successfully')</script>";
<script>window.location = '../staff.php';</script>;
<?php //successful Deletion
	
}//no user
?>