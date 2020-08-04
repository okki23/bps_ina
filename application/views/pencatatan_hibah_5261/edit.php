


	<ol class="breadcrumb float-xl-left">
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
				echo form_open_multipart('pencatatan_hibah_5261/edit/'.$pencatatan_hibah_5261->id_pencatatan_hibah);	
				
			?>		

		<?php {  ?>
								
		<fieldset>
						<div class="row">
							<div class="col-xl-8 offset-xl-2">
							
								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Nama Barang</label>
										<div class="col-lg-9 col-xl-6">
											<input type="text" name="nama_barang" class="form-control" value="<?php echo $pencatatan_hibah_5261->nama_barang ?>" required>	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Nilai Barang</label>
										<div class="col-lg-9 col-xl-6">
											<input type="text" name="nilai_barang" class="form-control" value="<?php echo $pencatatan_hibah_5261->nilai_barang ?>" required>	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Nama Penerima</label>
										<div class="col-lg-9 col-xl-6">
											<input type="text" name="nama_penerima" class="form-control" value="<?php echo $pencatatan_hibah_5261->nama_penerima ?>" required>
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Status</label>
										<div class="col-lg-9 col-xl-6">
											<textarea name='status' class="form-control" rows="3"><?php echo $pencatatan_hibah_5261->status ?></textarea>		
										</div>
								</div>

								<h5>Tahap I Pengumpulan Data Dukung</h5> </br>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">BAST Kepala Sekolah</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_1" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_1 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">BAST Yayasan</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_2" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_2 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">BAST Kepala Dinas Pendidikan</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_3" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_3 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Data Dukung Lainnya</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_4" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_4 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Fotocopy POK / DIPA</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_5" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_5 ?>">	
										</div>
								</div>

								<h5>Tahap II Usulan Permohonan Persetujuan Hibah</h5> </br>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Surat Usulan Permohonan Persetujuan Hibah</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_6" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_6 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">SK. Pembentukan TIM Internal</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_7" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_7 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Berita Acara Pemeriksaan</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_8" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_8 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Surat Pernyataan</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_9" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_9 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Surat Pernyataan Tanggung Jawab</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_10" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_10 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Alasan Hibah</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_11" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_11 ?>">	
										</div>
								</div>

								<h5>Tahap III Naskah Hibah & BAST Akhir Kepada Pihak Penerima</h5> </br>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Naskah Hibah yang Ditanda Tangani</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_12" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_12 ?>">	
										</div>
								</div>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">BAST Akhir yang Ditanda Tangani</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_13" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_13 ?>">	
										</div>
								</div>

								<h5>Tahap IV Usulan Permohonan SK. Penghapusan BMN</h5> </br>

								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label">Surat Usulan Permohonan SK. Penghapusan</label>
										<div class="col-lg-9 col-xl-6">
											<input type="file" name="file_14" class="form-control" value="<?php echo $pencatatan_hibah_5261->file_14 ?>">	
										</div>
								</div>
								
								<div class="form-group row m-b-10">
									<label class="col-lg-3 text-lg-left col-form-label"></label>
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