


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
		
		
		<?php
			echo form_open_multipart($this->uri->segment(1).'/post');
		?>
		<?php 
			$id  	 =  $this->uri->segment(3);
			echo  $this->session->flashdata('pesan'); 
		?>			

		<?php {  ?>
								
			<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
					
						<input type="hidden" name='UNITKERJA_SING' placeholder="" class="form-control" value="<?php echo $this->session->userdata('UNITKERJA_SING');?>"/>
						<input type="hidden" name='kd_unit' placeholder="" class="form-control" value="<?php echo $this->session->userdata('kd_unit');?>"/>	
					
	
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun Pendaftaran</label>
								<div class="col-lg-9 col-xl-6">
									<div class="row row-space-6">
										<div class="col-4">
											<select class="form-control" name='tahun_pendaftaran'>
												<?php for($i=date('Y'); $i>=date('Y')-5; $i-=1){ echo"<option value='$i'> $i </option>";  } ?>
											</select>
										</div>		
									</div>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Calon Siswa</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='nama_siswa' placeholder="" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Kelamin</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('jenis_kelamin','jenis_kelamin','','keterangan','keterangan','',''); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">NIK</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='nik' placeholder="Diisi Jika Ada" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tempat Lahir</label>
								<div class="col-lg-9 col-xl-6">
									<select class="default-select2 form-control" name='tempat_lahir'>
										<?php
											$nama_kota= isset($_GET['nama_kota']) ? $_GET['nama_kota'] : '';
											$b="SELECT nama_kota FROM kabupaten_kota ";
											$s=mysql_query($b);
											while($don=mysql_fetch_array($s)){
										?>									
										<option value="<?php echo $don['nama_kota']?>"><?php echo $don['nama_kota'];?></option>
										<?php
											}
										?>
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tanggal Lahir</label>
								<div class="col-lg-9 col-xl-6">
									<input type="date" name='tanggal_lahir' class="form-control" />
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Alamat</label>
								<div class="col-lg-9 col-xl-6">	
									<textarea name='alamat' class="form-control"> </textarea>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Kode Pos</label>
								<div class="col-lg-9 col-xl-3">	
									<input type="text" name='kode_pos' class="form-control" required />
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Agama</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('agama','mst_agama','','agama','agama','',''); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Asal Sekolah</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='asal_sekolah' class="form-control" />
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Kota Asal Sekolah</label>
								<div class="col-lg-9 col-xl-6">
									<select class="default-select2 form-control" name='kota_asal_sekolah'>
										<?php
											$nama_kota= isset($_GET['nama_kota']) ? $_GET['nama_kota'] : '';
											$b="SELECT nama_kota FROM kabupaten_kota ";
											$s=mysql_query($b);
											while($don=mysql_fetch_array($s)){
										?>									
										<option value="<?php echo $don['nama_kota']?>"><?php echo $don['nama_kota'];?></option>
										<?php
											}
										?>
									</select>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Status Pendaftaran</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('status_pendaftaran','status_register','','keterangan','keterangan','',''); ?>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label"></label>
								<div class="col-lg-9 col-xl-6">
									<button type="submit" name="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>Simpan</button>
								&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
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