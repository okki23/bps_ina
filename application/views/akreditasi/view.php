
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><?php echo anchor($this->uri->segment(1),$title);?></li>
	</ol>
	<h1 class="page-header"><small><?php echo anchor($this->uri->segment(1),$title);?></small></h1>
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
			if($this->session->userdata('level')==3)
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
			<a href="<?php echo base_url('akreditasi/post') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah <?php echo $title;?></a>
		</p>	
		 
		 <hr>
			
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="1%">No.</th>
				<th>NAMA PROGRAM STUDI/JURUSAN</th>
				<th width="15%">TAHUN</th>
				<th width="4%">STATUS AKREDITASI</th>
				<th width="4%">EDIT/HAPUS</th>
			</tr>
		</thead>

		<tbody>
			<?php
				$i=1;
				foreach ($record as $r)
				 {
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $r->nama_prodi;?></td>
				<td><?php echo $r->tahun;?></td>
				<td><center><?php echo $r->kriteria;?></center></td>
				<td>
					<div align="center">
						<a href="<?php echo base_url('akreditasi/edit/'.$r->id_akreditasi) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
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