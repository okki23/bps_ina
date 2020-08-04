
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
			if($this->session->userdata('level')==3)
			{  
		?>
		<?php
			echo form_open($this->uri->segment(1).'/edit');
			echo "<input type='hidden' name='id' value='$r[id_pendidikan_siswa]'>";
		?>
	
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
				
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun</label>
								<div class="col-lg-9 col-xl-6">
									<div class="row row-space-6">
										<div class="col-4">
											<?php echo inputan('text', 'tahun','','', 1, $r['tahun'],'');?>
										</div>		
									</div>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">NIM</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'NIM','','', 1, $r['NIM'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Siswa</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'nama','','', 1, $r['nama'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Prodi</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="nama_prodi" >																	
										<option value="<?php echo $r['nama_prodi']?>"><?php echo $r['nama_prodi']?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['nama_prodi']?>"> <?php echo $ass['nama_prodi']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">STRATA</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="strata" >																	
										<option value="<?php echo $r['strata']?>"><?php echo $r['strata']?></option>
										<?php foreach ($record4 as $ass)
											{
										?>
										<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">JENIS KELAS</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="jenis_kelas" >																	
										<option value="<?php echo $r['jenis_kelas']?>"><?php echo $r['jenis_kelas']?></option>
										<?php foreach ($record5 as $ass)
											{
										?>
										<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenjang Tingkat/Kelas</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('jenjang_kelas','mst_jenjang_tingkat','','keterangan','keterangan','','',$r['jenjang_kelas']); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Pembayaran</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('jenis_pembayaran','mst_jenis_pembayaran_siswa','','keterangan','keterangan','','',$r['jenis_pembayaran']); ?>
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