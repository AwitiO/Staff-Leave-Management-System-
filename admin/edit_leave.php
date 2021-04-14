<?php require('../connect.php');
include('include/edit_leave.php');
include('include/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--meta data-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Leave || Dashboard</title>
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
            <h6 class="m-0">EDIT DETAILS OF LEAVE <?php echo $value['id'];?> &nbsp; FOR <b> <?php echo $value['f_name'];?> &nbsp;<?php echo $value['l_name'];?></b></h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Leave</li>
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
          <div class="id">
<input  type="hidden" value="<?php echo $value['id'];?>"  class="form-control" name= "id" id= "id" placeholder="Leave ID" required>

</div>               
<div class="staff_no">
<input  type="hidden" value="<?php echo $value['staff_no'];?>"  class="form-control" name= "staff_no" id= "staff_no" placeholder="Staff Number" required>
<div class="row"></div>
<label for="leave_type" >Type of Leave:</label>
<select class="form-control" style="height:40px;"  name = "leave_type"  id="leave_type" required>
<option value="<?php echo $value['leave_type'];?>"><?php $type=$value['leave_type']; $sql= "SELECT * FROM t_leave WHERE ltype_id= ? ";
$query = $conn->prepare($sql);
$query->execute(array($type));
$row= $query->fetch(); echo $row['leave_type'];?></option>
<?php
$sqldep = "SELECT * FROM t_leave ";
$querydep = $conn->prepare($sqldep);
$querydep->execute();
$fetchdep = $querydep->fetchAll();

foreach ($fetchdep as $keydep => $valuedep) { ?>
<option value="<?php echo $valuedep['ltype_id']; ?>"> <?php  echo $valuedep['leave_type']; }?></option>
</select>
</div>
					<div class="form-group has-feedback">
<label for="start_date">Start Date:</label>
<input type="date" value = "<?php echo $value['start_date'];?>" class="form-control" name= "start_date" id="start_date" placeholder="<?php echo $value['start_date'];?>"  required>
</div>
<div class="form-group has-feedback">
<label for="end_date">End Date:</label>
<input type="date" value = "<?php echo $value['end_date'];?>" class="form-control" name="end_date" id="end_date" placeholder="Date Of Birth" required>
</div>			
		<div class="card-footer">

<button type="submit" name="edit_leave" id="edit_leave" class="btn btn-primary">Save</button>
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
