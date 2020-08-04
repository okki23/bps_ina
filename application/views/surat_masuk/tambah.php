


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
				// Error
				if(isset($error)) {
				echo '<div class="alert alert-warning">';
				echo $error;
				echo '</div>';
				}

			// Validasi
				echo validation_errors('<div class="alert alert-success">','</div>');

				// Form
				echo form_open_multipart('surat_masuk/tambah');
				$status=array(1=>'Aktif',2=>'Tidak Aktif');
				$class_status    ="class='form-control' id='status'";
			?>		

		<?php {  ?>
								
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
		
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun</label>
								<div class="col-lg-9 col-xl-6">
									<div class="row row-space-6">
										<div class="col-4">
											<select class="form-control" name='tahun'>
												<?php for($i=date('Y'); $i>=date('Y')-5; $i-=1){ echo"<option value='$i'> $i </option>";  } ?>
											</select>
										</div>		
									</div>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nomor Surat</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='no_surat' placeholder="" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tanggal Surat</label>
								<div class="col-lg-9 col-xl-6">
									<input type="date" name='tgl_surat' placeholder="" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tanggal Diterima</label>
								<div class="col-lg-9 col-xl-6">
									<input type="date" name='tgl_diterima' placeholder="" class="form-control"/>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Isi Ringkas</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='isi_ringkas' class="form-control" rows="3"></textarea>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Asal Surat</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='asal_surat' class="form-control" rows="3"></textarea>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Keterangan</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='keterangan' class="form-control" rows="3"></textarea>		
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Upload File</label>
								<div class="col-lg-9 col-xl-6">
									<input type="file" name="gambar" class="form-control">	
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label"></label>
								<div class="col-lg-9 col-xl-6">
									<button type="submit" name="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>Simpan</button>
								</div>
						</div>								
					</div>
			</div>			
		</fieldset>
			
							</form>
							<?php
							}
							?>		
						
		</div>
	</div>