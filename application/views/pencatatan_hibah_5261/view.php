
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
			<a href="<?php echo base_url('pencatatan_hibah_5261/post') ?>" class="btn btn-primary" style="background-color: #394384; color: #FFFFFF; border-radius: 20px;">
			<i class="fa fa-plus"></i> Tambah Surat Hibah</a>
			</p>
			<hr>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr style="background-color: #394384; color: #FFFFFF;">
						<th width="1%">No.</th>
						<th width="4%">Nama Barang</th>
						<th width="5%">Nilai</th>
						<th width="5%">Nama Penerima</th>
						<th width="25%">File</th>
						<th width="5%">Status</th>
						<th width="5%">Edit</th>
						<th width="5%">Hapus</th>
					</tr>
				</thead>
				<tbody>
						<?php 	$i=1; foreach ($pencatatan_hibah_5261 as $r)
							{
						?>
						<tr>
							<td width="1%"><?php echo $i;?></td>
							<td width="10%"><?php echo $r->nama_barang;?></td>
							<td width="5%"><?php echo $r->nilai_barang;?></td>
							<td width="10%"><?php echo $r->nama_penerima;?></td>
							<td width="20%"><?php echo $r->status."<br>
							<b>BAST Kepala Sekolah : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_1."' target='_blank'>".$r->file_1."</a> <br>
							<b>BAST Yayasan : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_2."' target='_blank'>".$r->file_2."</a> <br>
							<b>BAST Kepala Dinas Pendidikan : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_3."' target='_blank'>".$r->file_3."</a> <br>
							<b>Data Dukung Lainnya : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_4."' target='_blank'>".$r->file_4."</a> <br>
							<b>Fotocopy POK / DIPA: </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_5."' target='_blank'>".$r->file_5."</a> <br>
							<b>Surat Usulan Permohonan Persetujuan Hibah : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_6."' target='_blank'>".$r->file_6."</a> <br>
							<b>SK. Pembentukan TIM Internal : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_7."' target='_blank'>".$r->file_7."</a> <br>
							<b>Berita Acara Pemeriksaan : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_8."' target='_blank'>".$r->file_8."</a> <br>
							<b>Surat Pernyataan : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_9."' target='_blank'>".$r->file_9."</a> <br>
							<b>Surat Pernyataan Tanggung Jawab : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_10."' target='_blank'>".$r->file_10."</a> <br>
							<b>Alasan Hibah : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_11."' target='_blank'>".$r->file_11."</a> <br>
							<b>Naskah Hibah yang Ditanda Tangani : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_12."' target='_blank'>".$r->file_12."</a> <br>
							<b>BAST Akhir yang Ditanda Tangani : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_13."' target='_blank'>".$r->file_13."</a> <br>
							<b>Surat Usulan Permohonan SK. Penghapusan : </b><i><a href='".base_URL()."assets/upload/pencatatan_hibah_5261/".$r->file_14."' target='_blank'>".$r->file_14."</a> <br>
							"?></td>
							<td width="5%"><?php echo $r->status;?></td>
							
							<td width="5%">
								<div align="center">
									<a href="<?php echo base_url('admin/pencatatan_hibah_5261/edit/'.$r->id_pencatatan_hibah) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								</div>
							</td>
							<td width="5%">
								<div align="center">
									<?php include('delete.php') ?>
								</div>
							</td>
						</tr>
						<?php $i++;}?>
					</tbody>
			</table>
		</div>
	</div>