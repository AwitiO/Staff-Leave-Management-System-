<?php 
$leave_id = $_GET['id'];
$sqlprint = "SELECT * FROM leave_details INNER JOIN staff_details ON staff_details.staff_no=leave_details.staff_no WHERE id =?";
$queryprint = $conn->prepare($sqlprint);
$queryprint->execute(array($leave_id));
$value = $queryprint->fetch();
include '../connect.php';
if(isset($_POST['edit_leave'])){
    $staff_no= strtoupper($_POST['staff_no']);
    $leave_type = strtoupper($_POST['leave_type']);
    $start_date = date("Y-m-d", strtotime($_POST['start_date']));
$end_date= date("Y-m-d", strtotime($_POST['end_date']));
    $posting_date= date('Y-m-d');
    $status=1;
    if($leave_type==0){echo"<script>alert('Enter a Valid Leave Type')</script>";
        echo"<script>window.location.href='add_staff.php'</script>";}
else{
$sql= "SELECT * FROM leave_details WHERE id= ? ";
$query = $conn->prepare($sql);
$query->execute(array($leave_id));
$row= $query->fetch();
$count = $query->rowCount();
if($count>0){
$update = $conn->prepare("UPDATE leave_details SET leave_type=?, start_date=?, end_date=?, l_status=?, posting_date=? WHERE id= '$leave_id'");
$update->execute(array($leave_type, $start_date, $end_date, $status,$posting_date));
$sql1= "SELECT * FROM leave_details WHERE id= ? AND leave_type=? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($leave_id, $leave_type));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1>0){
echo"<script>alert('Leave Updated Successfully')</script>";
echo"<script>window.location.href='leave.php'</script>";} 
else{echo"<script>alert('Staff Not Successfully Updated')</script>";
echo"<script>window.location.href='leave.php'</script>";}}
else{echo"<script>alert('Error')</script>";
echo"<script>window.location.href='leave.php'</script>";}}}

?>