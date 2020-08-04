
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
			<a href="<?php echo base_url('surat_masuk/tambah') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah Surat Masuk</a>
			</p>
			<hr>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="1%">No.</th>
						<th width="4%">TAHUN</th>
						<th width="25%">ISI RINGKAS</th>
						<th width="20%">ASAL SURAT</th>
						<th width="15%">NOMOR SURAT</th>
						<th width="10%">TGL SURAT</th>
						<th width="10%">TGL DITERIMA</th>
						<th width="10%">KETERANGAN</th>
						<th width="8%">EDIT/HAPUS</th>
					</tr>
				</thead>
				<tbody>
						<?php 	$i=1; foreach ($surat_masuk as $r)
							{
						?>
						<tr>
							<td width="1%"><?php echo $i;?></td>
							<td width="4%"><?php echo $r->tahun;?></td>
							<td width="25%"><?php echo $r->isi_ringkas."<br>
							<b>File : </b><i><a href='".base_URL()."assets/upload/surat_masuk/".$r->gambar."' target='_blank'>".$r->gambar."</a>"?></td>
							
							<td width="5%"><?php echo $r->asal_surat;?></td>
							<td width="5%"><?php echo $r->no_surat;?></td>
							<td width="8%"> <?php echo tgl_indo($r->tgl_surat);?></td>
							<td width="8%"> <?php echo tgl_indo($r->tgl_diterima);?></td>
							<td width="5%"><?php echo $r->keterangan;?></td>
	
							</td>
							<td width="5%">
								<div align="center">
									<a href="<?php echo base_url('surat_masuk/edit/'.$r->id_surat_masuk) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									<?php include('delete.php') ?>
								</div>
							</td>
						</tr>
						<?php $i++;}?>
					</tbody>
			</table>
		</div>
	</div>