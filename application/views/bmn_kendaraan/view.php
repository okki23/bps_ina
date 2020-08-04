
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
			<a href="<?php echo base_url('bmn_kendaraan/post') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah <?php echo $title;?></a>
		</p>
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="1%"><font size="2">No.</font></th>
				<th width="20%"><font size="2">NAMA KENDARAAN</font></th>
				<th width="20%"><font size="2">MERK KENDARAAN</font></th>
				<th width="20%"><font size="2">JENIS</font></th>
				<th width="20%"><font size="2">TAHUN PEMBELIAN</font></th>
				<th width="20%"><font size="2">NILAI</font></th>
				<th width="20%"><font size="2">STATUS</font></th>
				<th width="20%"><font size="2">KELUHAN</font></th>
				<th width="20%"><font size="2">FUNGSI</font></th>
				
				
				<th width="4%"></th>
		</thead>

		<tbody>
			<?php
				$i=1;
				foreach ($record as $r)
				 {
			?>
			
			<tr>
				<td><font size="2"><?php echo $i;?></font></td>
				<td><font size="2"><?php echo $r->nama_kendaraan;?></td>
				<td><font size="2"><?php echo $r->merk_kendaraan;?></td>
				<td><font size="2"><?php echo $r->jenis_kendaraan;?></td>
				<td><font size="2"><?php echo $r->tahun_pembelian;?></td>
				<td><font size="2">Nilai Pembelian<?php echo rupiah($r->nilai_pembelian);?> <br>
								   Nilai Sekarang <?php echo rupiah($r->nilai_sekarang);?>
				</td>
				<td><font size="2"><?php echo $r->status_kendaraan;?></td>
				<td><font size="2"><?php echo $r->keluhan_kendaraan;?></td>
				<td><font size="2"><?php echo $r->fungsi_kendaraan;?></td>
				
	
				<td>
					<div align="center">
						<a href="<?php echo base_url('bmn_kendaraan/edit/'.$r->id_bmn_kendaraan) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
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