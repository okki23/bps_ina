<?php
if($this->session->userdata('id_users')=='')
{
    redirect('auth/login');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>BPSDMI | KEMENPERIN</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="<?php echo base_url()?>template//assets/css/google/app.min.css" rel="stylesheet" />
	
	<link href="<?php echo base_url()?>template/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />

	<link href="<?php echo base_url()?>template/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet">
	
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/@danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet">
		
	<link href="<?php echo base_url()?>template/assets/plugins/superbox/superbox.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/lity/dist/lity.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet">
	
	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar page-with-light-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">
					<div class="brand">
							<img src="<?php echo base_url();?>template/assets/img/login-bg/logo-bpsdmi.png" alt="" width="370"/>
						</div>
				</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<ul class="navbar-nav d-flex flex-grow-1">
				<li class="navbar-form flex-grow-1"></li>
				<li class="dropdown">
					<a href="<?php echo base_url();?>auth/logout"><i class="fa fa-power-off"></i></a>
				</li>
			</ul>
		</div>
		<?php require_once('menu.php'); ?>
		<div class="sidebar-bg"></div>
		<div id="content" class="content"><?php echo $contents;?></div>
		
		
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url()?>template/assets/js/app.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/theme/google.min.js"></script>
	

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url()?>template/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/@danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/tag-it/js/tag-it.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-show-password/dist/bootstrap-show-password.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/clipboard/dist/clipboard.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/demo/form-plugins.demo.js"></script>
	
	
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/demo/table-manage-default.demo.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-bs4/css/buttons.bootstrap4.min.css"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/pdfmake/build/pdfmake.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/pdfmake/build/vfs_fonts.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/jszip/dist/jszip.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/demo/table-manage-buttons.demo.js"></script>
	<link href="<?php echo base_url()?>template/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>template/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet">
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url()?>template/assets/plugins/flot/jquery.flot.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/flot/jquery.flot.time.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/flot/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<script src="<?php echo base_url()?>template/assets/plugins/superbox/jquery.superbox.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/lity/dist/lity.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/demo/profile.demo.js"></script>
	
	
	<script src="<?php echo base_url()?>template/assets/plugins/d3/d3.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/nvd3/build/nv.d3.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/clipboard/dist/clipboard.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/plugins/highlight.js/highlight.min.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/demo/widget.demo.js"></script>
	<script src="<?php echo base_url()?>template/assets/js/demo/render.highlight.js"></script>
	
	<script src="<?php echo base_url()?>template/assets/plugins/chartjs/Chart.js"></script>
	
	
	<script src="<?php echo base_url()?>template/assets/js/demo/dashboard.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

	
<script type="text/javascript">  
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('kd_unit').value = prdName[id].kd_unit;
document.getElementById('id_satker').value = prdName[id].id_satker;
document.getElementById('UNITKERJA_SING').value = prdName[id].UNITKERJA_SING;

};
</script>


</body>
</html>