<?php
require('../connect.php');
include('include/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--meta data-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin | Dashboard</title>
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
			  <div class="col-4 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-exclamation-triangle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Leave Pending Approval</span>
                <span class="info-box-number">
                  <?php 
					$status=1;
          $name=$detail['staff_no'];
						$sql_pending = "SELECT * FROM leave_details WHERE l_status='$status' AND staff_no='$name' "; 
					$query_pending = $conn->query($sql_pending);
$count_pending = $query_pending->rowCount();
echo $count_pending;?>
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div><!-- /.pending -->
			   <div class="col-4 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-ticket-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approved Leave</span>
                <span class="info-box-number">
                 <?php 
					$status=2;
						$sql_approved = "SELECT * FROM leave_details WHERE l_status='$status'"; 
					$query_approved = $conn->query($sql_approved);
$count_approved = $query_approved->rowCount();
echo $count_approved;?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div><!-- /.Approved -->
			   <div class="col-4 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-exclamation-triangle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rejected Leave</span>
                <span class="info-box-number">
                  <?php 
					$status=0;
						$sql_reject = "SELECT * FROM leave_details WHERE l_status='$status'"; 
					$query_reject = $conn->query($sql_reject);
$count_reject = $query_reject->rowCount();
echo $count_reject;?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div><!-- /.Approved -->
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
  <small><strong> &copy;2021 <a href="#">Catherine Awiti Ochieng</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1.0</small>
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
