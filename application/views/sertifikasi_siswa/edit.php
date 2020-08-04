
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
				echo form_open_multipart('sertifikasi_siswa/edit');
				echo "<input type='hidden' name='id' value='$r[id_sertifikasi_siswa]'>";
				
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
				<label class="col-form-label col-md-3">Sertifikasi Kompetensi</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'sertifikasi_kompetensi','','', 1, $r['sertifikasi_kompetensi'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Bidang Kompetensi</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'bidang_kompetensi','','', 1, $r['bidang_kompetensi'],'');?>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Status Sertifikasi</label>
					<div class="col-md-9">
						<select class="form-control" name="status_sertifikasi" >																	
							<option value="<?php echo $r['status_sertifikasi']?>"><?php echo $r['status_sertifikasi']?></option>
							<?php foreach ($record as $ass)
								{
							?>
							<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
							<?php } ?>
									
						</select>
					</div>
			</div>
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Penyelenggara</label>
					<div class="col-md-9">
						<?php echo inputan('text', 'penyelenggara','','', 1, $r['penyelenggara'],'');?>
					</div>
			</div>
			
			<div class="form-group row m-b-15">
				<label class="col-form-label col-md-3">Waktu</label>
					<div class="col-md-9">
						<input type="date" name='waktu' class="form-control" value="<?php echo $r['waktu'];?>" >
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