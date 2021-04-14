<?php
$id = $_GET['id'];
$sqlprint = "SELECT * FROM t_leave WHERE ltype_id = ? ";
$queryprint = $conn->prepare($sqlprint);
$queryprint->execute(array($id));
$value = $queryprint->fetch();
if(isset($_POST['edit_ltype'])){
	$leave_type = strtoupper($_POST['leave_type']);
$sql1 = "SELECT * FROM  t_leave WHERE ltype_id = ?";
$query1 = $conn->prepare($sql1);
$query1->execute(array($id));
$row1 = $query1->fetch();
$count1 = $query1->rowCount();
if($count1>0){
$update = $conn->prepare("UPDATE t_leave SET  leave_type =? WHERE ltype_id='$id'");
$update->execute(array($leave_type));
$sql2 = "SELECT * FROM t_leave WHERE ltype_id = ? ";
$query2 = $conn->prepare($sql2);
$query2->execute(array($id));
$row2 = $query2->fetch();
$count2 = $query2->rowCount();
	if($count2>0){
	echo"<script>alert('Leave Type Updated Successfully')</script>";
	echo"<script>window.location.href='leave_type.php'</script>";
	
} else{
	echo"<script>alert('Leave Type Not Successfully Updated')</script>";
	echo"<script>window.location.href='leave_type.php'</script>";
}
}
else{
	echo"<script>alert('Wrong Credentials')</script>";
	echo"<script>window.location.href='leave_type.php'</script>";
}
	
}

?>