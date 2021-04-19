
<?php
include '../../connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM leave_details WHERE id=?";
$delete = $conn->prepare($sql);
$delete->execute(array($id));

$sql1= "SELECT * FROM leave_details WHERE id= ? ";
$query1 = $conn->prepare($sql1);
$query1->execute(array($id));
$row1= $query1->fetch();
$count1 = $query1->rowCount();
if($count1>0){
echo"<script>alert('Error in Deleting')</script>";
echo"<script>window.location.href='pending-leave.php'</script>";

} else{
echo"<script>alert('Deleted Successfully ')</script>";
echo"<script>window.location.href='pending-leave.php'</script>";
}


?>