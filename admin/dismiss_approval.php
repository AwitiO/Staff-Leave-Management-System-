<?php 
include '../connect.php';
// $status = $_POST['status'];
$leave_id = $_GET['id'];
$approval_date= NULL;
$sql= "SELECT * FROM leave_details WHERE id= ?";
$query = $conn->prepare($sql);
$query->execute(array($leave_id));
$value = $query->fetch();
$count= $query->rowCount();
if($count>0){
$status=1;
$query = $conn->prepare("UPDATE leave_details SET l_status ='$status', approval_date='$approval_date' WHERE id = ?"); 	
$query->execute(array($leave_id));
$sql1= "SELECT * FROM leave_details WHERE id= ? AND l_status=? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($leave_id, $status));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1>0){
    echo"<script>alert('Unapproved Successfully')</script>";
    echo"<script>window.location.href='leave.php'</script>";} 
    else{echo"<script>alert('Not Successfully Unapproved')</script>";
    echo"<script>window.location.href='leave.php'</script>";}}
else{
    echo"<script>alert('Error')</script>";
    echo"<script>window.location.href='leave.php'</script>";
}


?>