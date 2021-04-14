<?php
if(isset($_POST['register'])){
$staff_no= $_POST['staff_no'];
$new_pass =$_POST['password'];
$conf_pass =$_POST['con_password'];
if($new_pass!=$conf_pass){ echo"<script>alert('Match the Password')</script>";
echo"<script>window.location.href='register.php'</script>";}//pass no matching
else{
	$password=md5($new_pass);
$sql= "SELECT * FROM staff_details WHERE staff_no= ?  ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row= $query->fetch();
$count= $query->rowCount();
$category=$row['category'];
if($count>0 AND $category==0){
$sqla= "SELECT * FROM admin WHERE staff_no= ? ";
$querya = $conn->prepare($sqla);
$querya->execute(array($staff_no));
$rowa= $querya->fetch();
$counta= $querya->rowCount();
if($counta>0){
	echo"<script>alert('User Already Registered')</script>";
echo"<script>window.location.href='register.php'</script>";}//admin user exist
else{
	$status=0;
	 $sql3 = "INSERT INTO admin(staff_no, password, status) VALUES(?,?,?)";
                    $query3 = $conn->prepare($sql3);
     $query3->execute(array($staff_no, $password, $status));
 $sql4= "SELECT * FROM admin WHERE staff_no= ?  ";
  $query4 = $conn->prepare($sql4);
   $query4->execute(array($staff_no));
 $row4= $query4->fetch();
 $count4 = $query4->rowCount();
if($count4>0){echo"<script>alert('User Added Successfully')</script>";
     echo"<script>window.location.href='index.php'</script>";}
 else{echo"<script>alert('User Not Added Successfully')</script>";}

}//not an admin
}//Staff details exist and an admin
elseif($count>0 AND $category==1){
$sqla= "SELECT * FROM staff_user WHERE staff_no= ?  ";
$querya = $conn->prepare($sqla);
$querya->execute(array($staff_no));
$rowa= $querya->fetch();
$counta= $querya->rowCount();
if($counta>0){
	echo"<script>alert('User Already Registered')</script>";
echo"<script>window.location.href='register.php'</script>";}//admin user exist
else{
	$status=0;
	 $sql3 = "INSERT INTO staff_user(staff_no, password, status) VALUES(?,?,?)";
                    $query3 = $conn->prepare($sql3);
                    $query3->execute(array($staff_no, $password, $status));
                    $sql4= "SELECT * FROM staff_user WHERE staff_no= ?  ";
                    $query4 = $conn->prepare($sql4);
                    $query4->execute(array($staff_no));
                    $row4= $query4->fetch();
                    $count4 = $query4->rowCount();
                    if($count4>0){echo"<script>alert('User Added Successfully')</script>";
                    echo"<script>window.location.href='index.php'</script>";}
                    else{echo"<script>alert('User Not Added Successfully')</script>";}

}//not an admin
}//Staff details exist and an admin
else{ echo"<script>alert('Staff Not Found')</script>";
echo"<script>window.location.href='register.php'</script>";}//staff no exist
}//matching password
}//button






?>