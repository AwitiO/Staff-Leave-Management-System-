<?php

if (isset($_POST['add_staff'])){
$staff_no= strtoupper($_POST['staff_no']);
$f_name = strtoupper($_POST['f_name']);
$l_name = strtoupper($_POST['l_name']); 
$gender = strtoupper($_POST['gender']);
$dob= strtoupper($_POST['d_o_b']);
$nation = strtoupper($_POST['nationality']);
	$tel_no = $_POST['tel_no'];
$email= $_POST['email'];
	$cat= $_POST['category'];
if($gender==1){echo"<script>alert('Enter a Valid Gender')</script>";
echo"<script>window.location.href='add_staff.php'</script>";}
	else if($cat==2){echo"<script>alert('Enter a Valid Category')</script>";
echo"<script>window.location.href='add_staff.php'</script>";}
	else{
		$sql = "SELECT * FROM staff_details WHERE staff_no= ? ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row = $query->fetch();
$count = $query->rowCount();
		if($count>0){echo"<script>alert('Staff Exists')</script>";
echo"<script>window.location.href='staff.php'</script>";}
		else{
		$add = $conn->prepare("INSERT INTO staff_details (staff_no, f_name, l_name, gender, d_o_b, nationality,tel_no,email ,category)
VALUES (?,?,?,?,?,?,?,?,?) ");
$add->execute(array($staff_no,$f_name, $l_name,$gender, $dob, $nation,$tel_no,$email, $cat));
			$sql1= "SELECT * FROM staff_details WHERE staff_no= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($staff_no));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
			if($count1>0){
echo"<script>alert('Staff Added Successfully')</script>";
echo"<script>window.location.href='staff.php'</script>";

} else{
echo"<script>alert('Staff Not Successfully Added')</script>";
echo"<script>window.location.href='add_staff.php'</script>";
}
		}
	}//add data
	
}//button 
?>