
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
		<?php echo form_open_multipart('admin/users/post'); ?>
		
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nama</label>
				<div class="col-md-9">
					<input name="nama" type="text" class="form-control m-b-5" placeholder="Nama">
					<small class="f-s-12 text-grey-darker">Nama tanpa Gelar</small>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">NIP</label>
				<div class="col-md-9">
					<input name="nip" type="text" class="form-control m-b-5" placeholder="NIP">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Kode Unit</label>
				<div class="col-md-9">
					<input name="kd_unit" type="text" class="form-control m-b-5" placeholder="Kode Unit">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Level</label>
				<div class="col-md-9">
					<?php echo buatcombo('level','level','','nama_level','id_level','',''); ?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Status Aktif</label>
				<div class="col-md-9">
					<?php echo buatcombo('status','status_aktif','','status_aktif','id_status_aktif','',''); ?>	
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Password</label>
				<div class="col-md-9">
					<input name="password" type="text" class="form-control m-b-5" placeholder="Password">					
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