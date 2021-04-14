<?php
if(isset($_POST['add_leavet'])){
	$name=$_POST['leavet_name'];
	$sql = "SELECT * FROM t_leave WHERE leave_type = ?";
$query = $conn->prepare($sql);
$query->execute(array($name));
$row = $query->fetch();
$count = $query->rowCount();
	if($count>0){echo"<script>alert('Leave Type Exists')</script>";}
	else{
				
$add = $conn->prepare("INSERT INTO t_leave (leave_type)
VALUES (?) ");
$add->execute(array($name,));
$sql1= "SELECT * FROM t_leave WHERE leave_type= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($name));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
		if($count1>0){
	echo"<script>alert('Leave Type Added Successfully')</script>";
	echo"<script>window.location.href='add-leavet.php'</script>";
	}//success
		 else{
	echo"<script>alert('Department Not Successfully Added')</script>";
	echo"<script>window.location.href='add-leavet.php'</script>";
}
	}//create Leave
}//button


?>