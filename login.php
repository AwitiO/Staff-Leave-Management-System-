<?php
include('connect.php');
if(isset($_POST['login'])){
$staff_no = $_POST['staff_no'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM admin WHERE staff_no = ? AND password = ?";
$query = $conn->prepare($sql);
$query->execute(array($staff_no,$password));
$row = $query->fetch();
$count = $query->rowCount();
	if($count>0){
	$sqlstatus = "SELECT * FROM admin WHERE staff_no = ? AND status ='0'";
    $querystatus = $conn->prepare($sqlstatus);
    $querystatus->execute(array($staff_no));
    $rowstatus = $querystatus->fetch();
    $countstatus = $querystatus->rowCount();
	if($countstatus>0){
		session_start();
		$_SESSION['id'] = $row['admin_id'];
	header('location:admin/dashboard.php');	
	}//correct account
	else{echo"<script>alert('Your Account Was Deactivated')</script>";
}//incorrect account
	}//status admin
	else{$password = md5($_POST['password']);
		$sql = "SELECT * FROM staff_user WHERE password = ? AND staff_no = ?";
		$query = $conn->prepare($sql);
		$query->execute(array($password,$staff_no));
		$row = $query->fetch();
		$count = $query->rowCount();
		if ($count > 0){
		$sqlactive = "SELECT * FROM staff_user WHERE staff_no=? AND status = '0'";
		$queryactive = $conn->prepare($sqlactive);
		$queryactive->execute(array($staff_no));
		$rowactive = $queryactive->fetch();
		$countactive = $queryactive->rowCount();
		if($countactive>0){
		session_start();
		$_SESSION['id'] = $row['user_id'];
		header('location:staff/dashboard.php');
			//header('location:ad_home.php');
		}
		else{echo"<script>alert('Your Account Was Deactivated')</script>"; 
		}	
		}else{echo"<script>alert('Login Failed!!!!!!incorrect Details')</script>";
		}	
		
	}//other staff
	
}//login button	
?>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js" ></script>

