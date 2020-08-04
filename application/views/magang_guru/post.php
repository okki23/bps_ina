
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
			if($this->session->userdata('level')==3)
			{  
		?>
		<?php echo form_open_multipart('magang_guru/post'); ?>
		
		
		
		<input name="nip" type="hidden" class="form-control m-b-5" value="<?php echo $y['nipbaru'];?>">
		<input name="nama" type="hidden" class="form-control m-b-5" value="<?php echo $y['NAMA'];?>">
		<input name="kd_unit" type="hidden" class="form-control m-b-5" value="<?php echo $y['kd_unit'];?>">
		
	
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nama</label>
				<div class="col-md-9">
					<input type="text" class="form-control m-b-5" value="<?php echo $y['NAMA'];?>">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">NIP</label>
				<div class="col-md-9">
					<input type="text" class="form-control m-b-5" value="<?php echo $y['nipbaru'];?>">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nama Perusahaan</label>
				<div class="col-md-9">
					<input name="perusahaan" type="text" class="form-control m-b-5" placeholder="Nama Perusahaan">
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Bidang</label>
				<div class="col-md-9">
					<input name="bidang" type="text" class="form-control m-b-5" placeholder="Bidang Perusahaan">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Lokasi</label>
				<div class="col-md-9">
					<input name="lokasi" type="text" class="form-control m-b-5" placeholder="Lokasi">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Tanggal Mulai</label>
				<div class="col-md-9">
					<input name="tgl_mulai" type="date" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Tanggal Akhir</label>
				<div class="col-md-9">
					<input name="tgl_selesai" type="date" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nomor Sertifikat</label>
				<div class="col-md-9">
					<input name="no_sertifikat" type="text" class="form-control m-b-5" placeholder="Nomor Sertifikat">
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3"></label>
				<div class="col-md-9">
					<input type="submit" name="submit" value="Simpan Data" class="btn btn-success btn-lg">
				</div>
		</div>
		
	
					
		
			
		<?php
			}
		?>
		</div>
	</div>