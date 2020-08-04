
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
			<?php if($this->session->userdata('level')==1) { ?>
				
			<?php
				if(isset($error)) {
					echo '<div class="alert alert-warning">';
					echo $error;
					echo '</div>';
				}
				echo validation_errors('<div class="alert alert-success">','</div>');
				echo form_open_multipart('admin/users/edit');
				echo "<input type='hidden' name='id' value='$r[id_users]'>";
				
			?>
			
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Nama</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'nama','','Nama ..', 1, $r['nama'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">NIP</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'nip','','NIP ..', 1, $r['nip'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Kode Unit</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'kd_unit','','Kode Unit ..', 1, $r['kd_unit'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Level</label>
					<div class="col-md-9">
						<?php echo editcombo('level','level','','nama_level','id_level','','',$r['level']); ?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Status</label>
					<div class="col-md-9">
						<?php echo editcombo('status','status_aktif','','status_aktif','id_status_aktif','','',$r['status']); ?>
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