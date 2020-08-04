
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><?php echo $title;?></li>
	</ol>
<h1 class="page-header"><?php echo $title;?></h1>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title"></h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		
		<div class="panel-body">
			<?php if($this->session->userdata('level')==3) { ?>
				
			<?php
				if(isset($error)) {
					echo '<div class="alert alert-warning">';
					echo $error;
					echo '</div>';
				}
				echo validation_errors('<div class="alert alert-success">','</div>');
				echo form_open_multipart('magang_siswa/edit');
				echo "<input type='hidden' name='id' value='$r[id_magang_siswa]'>";
				
			?>
			
					
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Nama</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'nama','','', 1, $r['nama'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">NIS</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'NIS','','', 1, $r['NIS'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Nama Perusahaan</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'perusahaan','','', 1, $r['perusahaan'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Bidang</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'bidang','','', 1, $r['bidang'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Lokasi</label>
					<div class="col-md-9">
						
						<?php echo editcombo('lokasi','kabupaten_kota','','nama_kota','nama_kota','','',$r['lokasi']); ?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Tanggal Mulai</label>
					<div class="col-md-9">
						<input type="date" name='tgl_mulai' class="form-control" value="<?php echo $r['tgl_mulai'];?>" >
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Tanggal Akhir</label>
					<div class="col-md-9">
						<input type="date" name='tgl_selesai' class="form-control" value="<?php echo $r['tgl_selesai'];?>" >
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Nomor Sertifikat</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'no_sertifikat','','', 1, $r['no_sertifikat'],'');?>
					</div>
			</div>
			
			
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3"></label>
					<div class="col-md-9">
						<input type="submit" name="submit" value="Simpan Data" class="btn btn-success btn-lg">
					</div>
			</div>
		
	</form>
	<?php } ?>
			
			
		</div>
	</div>