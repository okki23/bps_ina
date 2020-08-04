
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
		<?php if($this->session->userdata('level')==3) {  ?>
		<?php echo form_open_multipart('sertifikasi_siswa/post'); ?>
		

		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nama</label>
				<div class="col-md-9">
					<input name="nama" type="text" class="form-control m-b-5" required >
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">NIS</label>
				<div class="col-md-9">
					<input name="NIS" type="text" class="form-control m-b-5" required>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Sertifikasi Kompetensi</label>
				<div class="col-md-9">
					<input name="sertifikasi_kompetensi" type="text" class="form-control m-b-5" placeholder="Sertifikasi Kompetensi">
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Bidang Kompetensi</label>
				<div class="col-md-9">
					<input name="bidang_kompetensi" type="text" class="form-control m-b-5" placeholder="Bidang Perusahaan">
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Status Sertifikasi</label>
				<div class="col-md-9">
					<select class="form-control" name="status_sertifikasi" >																	
						<?php foreach ($record as $ass) { ?>
						<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
						<?php } ?>		
					</select>	
				</div>
		</div>
		
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Penyelenggara</label>
				<div class="col-md-9">
					<input name="penyelenggara" type="text" class="form-control m-b-5" placeholder="Bidang Perusahaan">
				</div>
		</div>
		
		
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Waktu</label>
				<div class="col-md-9">
					<input name="waktu" type="date" class="form-control m-b-5">
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