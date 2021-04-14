<?php require('../connect.php');
include('include/edit_staff.php');
include('include/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--meta data-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Staff || Dashboard</title>
<link rel="icon" href="../dist/img/t-icon.png">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
	<?php include('header.php');
	include('sidebar.php');?>
	

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0">EDIT DETAILS OF <b><?php echo $value['f_name'];?> &nbsp;<?php echo $value['l_name'];?></b></h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Staff</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		  
		  <div class="row">
			
			  <div class="col-12 ">
            <div class="card-primary">
				 <div class="card-header">
                <h3 class="card-title">Please Use Capital Letters</h3>
              </div>
              <!-- /.card-header -->
				
				<!-- form start -->
				<form action=""  method="post">
					<div class="card-body">
                  
<div class="staff_no">
<input  type="hidden" value="<?php echo $value['staff_no'];?>"  class="form-control" name= "staff_no" id= "staff_no" placeholder="Staff Number" required>

</div>
	<div class="form-group has-feedback">
<label for="f_name">First Name:</label>
<input value = "<?php echo $value['f_name'];?>" class="form-control" name= "f_name" id="f_name" placeholder=" <?php echo $value['f_name'];?> First Name" pattern="[A-Z]+" required>
</span>
</div>
					<div class="form-group has-feedback">
<label for="l_name">Last Names:</label>
<input value = "<?php echo $value['l_name'];?>" class="form-control" name= "l_name" id="l_name" placeholder="<?php echo $value['l_name'];?>"  required>
</div>
					<div class = "form-group has-feedback">
<div class="row"></div>
<label for="gender" >Gender:</label>
<select  value = "<?php echo $value['gender'];?>" class="form-control" style="height:40px;"  pattern="^[A-Z]+" name = "gender" id="gender" placeholder="Gender" required>
<option value="<?php echo $value['gender'];?>"><?php echo $value['gender'];?></option>
<option value="FEMALE">FEMALE</option>
<option value="MALE">MALE</option>
</select>
</div>
<div class="form-group has-feedback">
<label for="d_o_b">Date Of Birth:</label>
<input type="date" value = "<?php echo $value['d_o_b'];?>" class="form-control" name="d_o_b" id="d_o_b" placeholder="Date Of Birth" required>
</div>
					<div class="form-group has-feedback">
<label for="nationality">Nationality:</label>
<input type="Text" value = "<?php echo $value['nationality'];?>" class="form-control" name="nationality" id="nationality" pattern="^[A-Z]+" placeholder="<?php echo $value['nationality'];?>" required>
</div>
					<div class="form-group has-feedback">
<label for="tel_no">Phone Number:</label>
<input type="tel" value = "<?php echo $value['tel_no'];?>" class="form-control" pattern="[0]{1}[7]{1}[0-9]{8}" placeholder="Eg. 0700665590 " name="tel_no" id="tel_no" required>
</div>
<div class="form-group has-feedback">
<label for="email">E-mail:</label>
<input type="email" value = "<?php echo $value['email'];?>" name="email" id="email" class="form-control" pattern="^[a-z0-9 !#$&'*+=?^_{|}~.-]+@[a-z0-9]+(\.[a-z0-9-]+)*" placeholder="Enter E-mail eg chiengotienofrank@gmail.com" required >
</div>
<div class = "form-group has-feedback">
<div class="row"></div>
<label for="gender" >Category:</label>
<select class="form-control" style="height:40px;"  pattern="^[A-Z]+" value = "<?php echo $value['category'];?>" name = "category" id="category" placeholder="Please Select An Option" required>
<option value="<?php echo $value['category'];?>">
	<?php if($value['category']==0){
	echo"ADMINISTRATION";} 
	elseif($value['category']==1){ echo "OTHER";}
	else{ echo "NULL";}?></option>
<option value="1"> Administration</option>
<option value="2">Other</option>
</select>
</div>
					
					
		<div class="card-footer">

<button type="submit" name="edit_staff" id="edit_staff" class="btn btn-primary">Save</button>
</div>
</form><!-- form end -->
				  </div>
            <!-- /.info-box -->
          </div><!-- /.pending -->
			   
			   
		  </div><!-- Info boxes -->
		  
		   
        

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

        

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy;2021 <a href="#">Catherine Awiti Ochieng</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>
