
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><?php echo $title;?></li>
	</ol>
	<h1 class="page-header"><?php echo $title;?></h1>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
	<div class="panel-body">
	<?php if($this->session->userdata('level')==1) {  ?>
		<?php
			if($this->session->flashdata('sukses')) 
			{
				echo '<div class="alert alert-success">';
				echo $this->session->flashdata('sukses');
				echo '</div>';
			}
				// Error
				echo validation_errors('<div class="alert alert-success">','</div>');
		?>
		<p>
			<a href="<?php echo base_url('admin/mainmenu/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Main Menu</a>
		</p>
		<hr>
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>NAMA MAIN MENU</th>
					<th>ICON</th>
					<th>AKTIF</th>
					<th>LINK</th>	
					<th>LEVEL</th>	
					<th>EDIT/HAPUS</th>	
				</tr>
			</thead>
				<tbody>
					<?php 	$i=1; foreach ($mainmenu as $r) { ?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $r->nama_mainmenu;?></td>
						<td><?php echo $r->icon;?></td>
						<td><?php echo status_aktif ($r->aktif);?></td>
						<td><?php echo $r->link;?></td>
						<td><?php echo $r->nama_level ?></td>
						
						<td>
							<div align="center">
								<a href="<?php echo base_url('admin/mainmenu/edit/'.$r->id_mainmenu) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								<?php include('delete.php') ?>
							</div>
						</td>
					</tr>
					<?php $i++;}?>
				</tbody>
		</table>
	<?php } ?>
		
	</div>
</div>

</div>
<div id="footer" class="footer">&copy; 2020 BPSDMI - KEMENPERIN </div>