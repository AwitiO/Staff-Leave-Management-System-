<?php
include '../../connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM t_leave WHERE ltype_id=?";
$delete = $conn->prepare($sql);
$delete->execute(array($id));

$sql1= "SELECT * FROM t_leave WHERE ltype_id= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($id));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1>0){
echo"<script>alert('Error in Deleting')</script>";
echo"<script>window.location.href='../leave_type.php'</script>";

} else{
echo"<script>alert('Deleted Successfully ')</script>";
echo"<script>window.location.href='../leave_type.php'</script>";
}


?>