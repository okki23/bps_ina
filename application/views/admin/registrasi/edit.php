
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
			if($this->session->userdata('level')==1)
			{  
		?>
		<?php
			echo form_open_multipart('admin/registrasi/edit');	
			echo "<input type='hidden' name='id' value='$r[id_registrasi]'>";
		?>
		
		
		<hr>
		
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Satker</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="UNITKERJA_SING" >																	
										<option value="<?php echo $r['UNITKERJA_SING']?>"><?php echo $r['UNITKERJA_SING']?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['UNITKERJA_SING']?>"> <?php echo $ass['UNITKERJA_SING']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Kode Unit Kerja</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="kd_unit" >																	
										<option value="<?php echo $r['kd_unit']?>"><?php echo $r['kd_unit']?></option>
										<?php foreach ($record4 as $ass)
											{
										?>
										<option value="<?php echo $ass['kd_unit']?>"> <?php echo $ass['UNITKERJA_SING']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
				
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun Pendaftaran</label>
								<div class="col-lg-9 col-xl-6">
									<div class="row row-space-6">
										<div class="col-4">
											<?php echo inputan('text', 'tahun_pendaftaran','','', 1, $r['tahun_pendaftaran'],'');?>
										</div>		
									</div>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Calon Siswa</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'nama_siswa','','', 1, $r['nama_siswa'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Kelamin</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('jenis_kelamin','jenis_kelamin','','keterangan','keterangan','','',$r['jenis_kelamin']); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">NIK</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'NIK','','', 1, $r['NIK'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tempat Lahir</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('tempat_lahir','kabupaten_kota','','nama_kota','nama_kota','','',$r['tempat_lahir']); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tanggal Lahir</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('date', 'tanggal_lahir','','', 1, $r['tanggal_lahir'],'');?>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Alamat</label>
								<div class="col-lg-9 col-xl-6">	
									<textarea name='alamat' class="form-control"><?php echo $r['alamat'];?></textarea>
								</div>
						</div>
						<div class="form-group row m-b-10"> 
							<label class="col-lg-3 text-lg-right col-form-label">Kode Pos</label>
								<div class="col-lg-9 col-xl-3">	
									<?php echo inputan('text', 'kode_pos','','', 1, $r['kode_pos'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Agama</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('agama','mst_agama','','agama','agama','','',$r['agama']); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Asal Sekolah</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'asal_sekolah','','', 1, $r['asal_sekolah'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Kota Asal Sekolah</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('kota_asal_sekolah','kabupaten_kota','','nama_kota','nama_kota','','',$r['kota_asal_sekolah']); ?>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Status Pendaftaran</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('status_pendaftaran','status_register','','keterangan','keterangan','','',$r['status_pendaftaran']); ?>
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