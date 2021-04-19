<?php
if (isset($_POST['add_leave'])){
$staff_no= strtoupper($_POST['staff_no']);
$leave_type = strtoupper($_POST['leave_type']);
$start_date = date("Y-m-d", strtotime($_POST['start_date']));
$end_date= date("Y-m-d", strtotime($_POST['end_date']));
$posting_date= date('Y-m-d');

$status=1;
if($leave_type==0){echo"<script>alert('Enter a Valid Leave Type')</script>";
echo"<script>window.location.href='add_staff.php'</script>";}
elseif($start_date>$end_date OR $start_date==$end_date) {
echo"<script>alert('Enter a Valid Start and End')</script>";
echo"<script>window.location.href='request_leave.php'</script>";
}
else{
$sql = "SELECT * FROM staff_details WHERE staff_no = ? ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row = $query->fetch();
$count = $query->rowCount();
if($count>0){
	$sql = "SELECT * FROM leave_details WHERE staff_no= ? AND l_status=? ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no,$status));
$row = $query->fetch();
$count = $query->rowCount();
if($count>0){echo"<script>alert('Application Not Allowed !!!Pending Leave')</script>";
echo"<script>window.location.href='pending-leave.php'</script>";}//pending leave
else{
	$add = $conn->prepare("INSERT INTO leave_details (staff_no, leave_type, start_date,end_date,  l_status)
VALUES (?,?,?,?,?) ");
$add->execute(array($staff_no,$leave_type, $start_date,$end_date, $status));
$sql1= "SELECT * FROM leave_details WHERE staff_no= ? AND posting_date=?";
$query1 = $conn->prepare($sql1);
$query1->execute(array($staff_no, $posting_date));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
			if($count1>0){
echo"<script>alert('Application Submitted Successfully')</script>";
echo"<script>window.location.href='pending-leave.php'</script>";

} else{
echo"<script>alert('Staff Not Successfully Added')</script>";
echo"<script>window.location.href='request_leave.php'</script>";
}

}//Add Leave
}//staff exist
else{ 
echo"<script>alert('Staff Does Not Exist')</script>";
echo"<script>window.location.href='dashboard.php'</script>";}
}//add leave
}//post


?>