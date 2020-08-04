
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
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr style="background-color: #394384; color: #FFFFFF;">
				<th>No.</th>
				<th>Ruangan</th>
				<th>Narasumber</th>
				<th>Peserta</th>
				<th>Materi</th>
				<th>Hari</th>
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Status</th>
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
			<td><?php echo $r->narasumber;?></td>
			<td><?php echo $r->jumlah_peserta;?></td>
			<td><?php echo $r->materi;?></td>
			<td><?php echo $r->hari;?></td>
			<td><?php echo tgl_indo($r->tanggal_mulai);?> &nbsp; s.d &nbsp;<?php echo tgl_indo($r->tanggal_selesai);?></td>
			<td><?php echo $r->jam_mulai;?> &nbsp; s.d &nbsp; <?php echo $r->jam_selesai;?></td>
			<td><?php echo $r->status;?></td>
			
		</tr>
		<?php $i++;}?>
	</tbody>	
	</table>

	<?php } ?>	
		</div>
	</div>