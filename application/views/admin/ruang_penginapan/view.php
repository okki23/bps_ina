
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
			<a href="<?php echo base_url('admin/ruang_penginapan/post') ?>" class="btn btn-primary" style="background-color: #394384; border-radius: 20px; color: #FFFFFF;">
			<i class="fa fa-plus"></i> Tambah <?php echo $title;?></a>
		</p>
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr style="background-color: #394384; color: #FFFFFF;">
				<th>No.</th>
				<th>Ruangan</th>
				<th>Jumlah Bed</th>
				<th>Jenis Ruangan</th>
				<th>Lokasi</th>
				<th>Hari</th>
				<th>Tanggal</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Hapus</th>
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
			<td><?php echo $r->nama_ruangan;?></td>
			<td><?php echo $r->jumlah_bed;?></td>
			<td><?php echo $r->jenis_ruangan;?></td>
			<td><?php echo $r->lokasi;?></td>
			<td><?php echo $r->hari;?></td>
			<td><?php echo tgl_indo($r->tanggal_mulai);?> &nbsp; s.d &nbsp;<?php echo tgl_indo($r->tanggal_selesai);?></td>
			<td><?php echo $r->status;?></td>

			<td>
				<div align="center">
					<a href="<?php echo base_url('admin/ruang_penginapan/edit/'.$r->id_ruangan) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
				</div>
			
			</td>
			
			<td>
				<div align="center">
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