<?php 
include('connect.php');
session_start();

if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')){ ?>
	<script>
		window.location = '../index.php';
	</script>
	<?php
}
$session_id = $_SESSION['id'];

$sqlses = "SELECT * FROM staff_user WHERE user_id =?";
$queryses = $conn->prepare($sqlses);
$queryses->execute(array($session_id));
$rowses = $queryses->fetch();

$staff_no = $rowses['staff_no'];
$sqlnameses = "SELECT * FROM staff_details WHERE staff_no = ? ";
$querynamses = $conn->prepare($sqlnameses);
$querynamses->execute(array($staff_no));
$detail = $querynamses->fetch();

?>