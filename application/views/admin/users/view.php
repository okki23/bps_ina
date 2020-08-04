
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
		<?php
			if($this->session->userdata('level')==1)
			{  
		?>
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
			<a href="<?php echo base_url('admin/users/post') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah <?php echo $title;?></a>
		</p>
			<hr>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>NAMA</th>
						<th>NIP</th>
						<th>UNIT KERJA</th>
						<th>KODE UNIT</th>
						<th>AKTIF</th>
						<th>LEVEL</th>	
						<th>EDIT/HAPUS</th>	
					</tr>
				</thead>
				<tbody>
					<?php 	$i=1; foreach ($record as $r)
						{
					?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $r->nama;?></td>
						<td><?php echo $r->nip;?></td>
						<td><?php echo $r->UNITKERJA_SING;?></td>
						<td><?php echo $r->kd_unit;?></td>
						<td><?php echo status_aktif($r->status);?></td>
						<td><?php echo level($r->level);?></td>
						
						<td>
							<div align="center">
								<a href="<?php echo base_url('admin/users/edit/'.$r->id_users) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								<a href="<?php echo base_url('admin/users/delete/'.$r->id_users) ?>"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>	
							</div>
						</td>
					</tr>
					<?php $i++;}?>
					</tbody>
			</table>
					<?php
						}
					?>
		</div>
	</div>