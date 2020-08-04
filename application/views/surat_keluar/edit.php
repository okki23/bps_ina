


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
				echo form_open_multipart('surat_keluar/edit/'.$surat_keluar->id_surat_keluar);	
				
			?>		

		<?php {  ?>
								
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
					
						<input type="hidden" name='UNITKERJA_SING' placeholder="" class="form-control" value="<?php echo $this->session->userdata('UNITKERJA_SING');?>"/>
						<input type="hidden" name='kd_unit' placeholder="" class="form-control" value="<?php echo $this->session->userdata('kd_unit');?>"/>	
					
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun</label>
								<div class="col-lg-9 col-xl-6">
									<div class="row row-space-6">
										<div class="col-4">
											<input type="text" name="tahun" class="form-control" value="<?php echo $surat_keluar->tahun ?>" required>	
										</div>		
									</div>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nomor Surat</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name="no_surat" class="form-control" value="<?php echo $surat_keluar->no_surat ?>" required>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tanggal Surat</label>
								<div class="col-lg-9 col-xl-6">
									<input type="date" name="tgl_surat" class="form-control" value="<?php echo $surat_keluar->tgl_surat ?>" required>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Asal Surat</label>
								<div class="col-lg-9 col-xl-6">
									<select name="asal_surat" class="form-control">
										<option value="Sekretaris Badan Pengembangan Sumber Daya Manusia Industri" <?php if($surat_keluar->asal_surat=="Sekretaris Badan Pengembangan Sumber Daya Manusia Industri") { echo "selected"; } ?>>Sekretaris Badan Pengembangan Sumber Daya Manusia Industri</option>
										<option value="Kepala Pusat Pendidikan dan Pelatihan Industri" <?php if($surat_keluar->asal_surat=="Kepala Pusat Pendidikan dan Pelatihan Industri") { echo "selected"; } ?>>Kepala Pusat Pendidikan dan Pelatihan Industri</option>
										<option value="Kepala Pusat Pengembangan Pendidikan Kejuruan dan Vokasi Industri" <?php if($surat_keluar->asal_surat=="Kepala Pusat Pengembangan Pendidikan Kejuruan dan Vokasi Industri") { echo "selected"; } ?>>Kepala Pusat Pengembangan Pendidikan Kejuruan dan Vokasi Industri</option>
									</select>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Isi Ringkas</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='isi_ringkas' class="form-control" rows="3"><?php echo $surat_keluar->isi_ringkas ?></textarea>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tujuan</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='tujuan' class="form-control" rows="3"><?php echo $surat_keluar->tujuan ?></textarea>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Keterangan</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='keterangan' class="form-control" rows="3"><?php echo $surat_keluar->keterangan ?></textarea>		
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