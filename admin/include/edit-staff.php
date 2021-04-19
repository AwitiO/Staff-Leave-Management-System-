<?php 
$staff_no = $_GET['id'];
$sqlprint = "SELECT * FROM staff_details WHERE staff_no = ? ";
$queryprint = $conn->prepare($sqlprint);
$queryprint->execute(array($staff_no));
$value = $queryprint->fetch();
if(isset($_POST['edit_staff'])){
$staff_no= strtoupper($_POST['staff_no']);
$f_name = strtoupper($_POST['f_name']);
$l_name = strtoupper($_POST['l_name']); 
$gender = strtoupper($_POST['gender']); 
$d_o_b = $_POST['d_o_b'];
$nationality = strtoupper($_POST['nationality']); 
$tel_no = $_POST['tel_no'];
$email= $_POST['email'];
$cat = $_POST['category'];
if($cat==2){ echo"<script>alert('Enter a Valid Category')</script>";
 echo"<script>window.location.href='staff.php'</script>";}
else{
$sql= "SELECT * FROM staff_details WHERE staff_no= ? ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row= $query->fetch();
$count = $query->rowCount();
if($count>0){
$update = $conn->prepare("UPDATE staff_details SET f_name=?, l_name=?, gender=?, d_o_b=?, nationality=?, tel_no=?,email=? ,category=? WHERE staff_no= '$staff_no'");
$update->execute(array($f_name, $l_name, $gender, $d_o_b, $nationality,$tel_no,$email,$cat));
$sql1= "SELECT * FROM staff_details WHERE staff_no= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($staff_no));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1>0){
echo"<script>alert('Staff Updated Successfully')</script>";
echo"<script>window.location.href='staff.php'</script>";} 
else{echo"<script>alert('Staff Not Successfully Updated')</script>";
echo"<script>window.location.href='staff.php'</script>";}}
else{echo"<script>alert('Error')</script>";
echo"<script>window.location.href='staff.php'</script>";}}}

?>