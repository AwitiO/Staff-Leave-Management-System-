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
<title>All Users</title>
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
<h1 class="m-0">Users Dashboard</h1>
</div><!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">All Users</li>
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
<div class="card">
<div class="card-header">
<h3 class="card-title">All Users</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Staff Number</th>
<th>Name</th>
<th>Email</th>
<th> Status</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM admin INNER JOIN staff_details ON staff_details.staff_no=admin.staff_no ";
$query = $conn->prepare($sql);
$query->execute();
$fetch = $query->fetchAll();
foreach ($fetch as $key => $value) { ?>

<tr>
<td class="hidden"><?php echo $value['staff_no'] ?></td>
<td><?php echo $value['f_name']?>&nbsp; &nbsp;<?php echo $value['l_name']?></td>
<td><?php echo $value['email']?></td>
<td><?php if($value['status']==1){ echo'<span style="color:red;"> DEACTIVATED</span>';}
     else if($value['status']==0){ echo'<span style="color:green;"> ACTIVE ACCOUNT</span>';}?></td>
</tr>

<?php }?>
<?php
$sql = "SELECT * FROM staff_user INNER JOIN staff_details ON staff_details.staff_no=staff_user.staff_no  ";
$query = $conn->prepare($sql);
$query->execute();
$fetch = $query->fetchAll();
foreach ($fetch as $key => $value) { ?>

<tr>
<td class="hidden"><?php echo $value['staff_no'] ?></td>
<td><?php echo $value['f_name']?>&nbsp; &nbsp;<?php echo $value['l_name']?></td>
<td><?php echo $value['email']?></td>
<td><?php if($value['status']==1){ echo'<span style="color:red;"> DEACTIVATED</span>';}
     else if($value['status']==0){ echo'<span style="color:green;"> ACTIVE ACCOUNT</span>';}?></td>
</tr>

<?php }?>

</tbody>
<tfoot>
<tr>
<th>Staff Number</th>
<th> Name</th>
<th>Email</th>
<th> Status</th>
</tr>
</tfoot>
</table>
</div>
<!-- /.card-body -->
</div>


<!-- /.Approved -->
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
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src=" ../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- Page specific script -->
<script>
$(function () {
$("#example1").DataTable({
"responsive": true, "lengthChange": false, "autoWidth":false,
   "buttons": [
            {
                extend: 'copy',
                exportOptions: {
                    columns: [ 0,1,2,3 ]
                }
            },
             {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
   {
                    extend: 'print',
                    exportOptions:{
                    columns:[0,1,2,3],
                    autoPrint: true,
                    orientation: 'landscape',
                    pageSize: 'A4',    
                    }
                    
                 },
             
          
        ]
        
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
</body>
</html>
