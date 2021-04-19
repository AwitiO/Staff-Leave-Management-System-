<?php 

if(isset($_POST['add_user'])){
$staff_no= $_POST['staff_no'];
$password=md5(1234);
$joining_date= date('Y-m-d');
$status=0;
//CHECK IF admin USER EXISTS
$sql= "SELECT * FROM admin  WHERE staff_no= ?  ";
$query = $conn->prepare($sql);
$query->execute(array($staff_no));
$row= $query->fetch();
$count = $query->rowCount();
if($count>0){  echo"<script>alert('User Already Exists')</script>";
echo"<script>window.location.href='users.php'</script>";}//IF USER EXISTS
else{
//CHECK IF Staff USER EXISTS
$sqls= "SELECT * FROM staff_user  WHERE staff_no= ?  ";
$querys = $conn->prepare($sqls);
$querys->execute(array($staff_no));
$rows= $query->fetch();
$counts= $query->rowCount();
if($counts>0){  echo"<script>alert('User Already Exists')</script>";
    echo"<script>window.location.href='users.php'</script>";}//IF USER EXISTS
    else{
        $sql1= "SELECT * FROM staff_details WHERE staff_no= ?  ";
        $query1 = $conn->prepare($sql1);
        $query1->execute(array($staff_no));
        $row1= $query1->fetch();
        $count1 = $query1->rowCount();
        $category=$row1['category'];
        if($count1<0){echo"<script>alert('Wrong Staff Number')</script>";
            echo"<script>window.location.href='add-user.php'</script>";}
            else{
                if($category==0){
                    $sql3 = "INSERT INTO admin(staff_no, password, status, date_created) VALUES(?,?,?, ?)";
                    $query3 = $conn->prepare($sql3);
                    $query3->execute(array($staff_no, $password, $status, $joining_date));
                    $sql4= "SELECT * FROM admin WHERE staff_no= ?  ";
                    $query4 = $conn->prepare($sql4);
                    $query4->execute(array($staff_no));
                    $row4= $query4->fetch();
                    $count4 = $query4->rowCount();
                    if($count4>0){echo"<script>alert('User Added Successfully')</script>";
                    echo"<script>window.location.href='add-user.php'</script>";}
                    else{echo"<script>alert('User Not Added Successfully')</script>";}
                }

                else{
                    $sql3 = "INSERT INTO staff_user(staff_no,  password,status, date_created) VALUES(?,?,?, ?)";
                    $query3 = $conn->prepare($sql3);
                    $query3->execute(array($staff_no, $password,$status,$joining_date));
                    $sql4= "SELECT * FROM staff_user WHERE staff_no= ?  ";
                    $query4 = $conn->prepare($sql4);
                    $query4->execute(array($staff_no));
                    $row4= $query4->fetch();
                    $count4 = $query4->rowCount();
                    if($count4>0){echo"<script>alert('User Added Successfully')</script>";
                    echo"<script>window.location.href='add-user.php'</script>";}
                    else{echo"<script>alert('User Not Added Successfully')</script>";}
                }

            }

    }
}

}//Submitted


?>