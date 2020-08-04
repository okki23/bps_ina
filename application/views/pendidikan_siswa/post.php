


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
							<label class="col-lg-3 text-lg-right col-form-label">Nama Siswa</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='nama' placeholder="" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">NIM</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='NIM' placeholder="" class="form-control"/>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">NAMA PRODI</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="nama_prodi" >																	
										<?php foreach ($record3 as $ass) { ?>
										<option value="<?php echo $ass['nama_prodi']?>"> <?php echo $ass['nama_prodi']?></option>
										<?php } ?>		
									</select>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">STRATA</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="strata" >																	
										<?php foreach ($record4 as $ass) { ?>
										<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
										<?php } ?>		
									</select>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">JENIS KELAS</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="jenis_kelas" >																	
										<?php foreach ($record5 as $ass) { ?>
										<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
										<?php } ?>		
									</select>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenjang Tingkat/Kelas</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('jenjang_kelas','mst_jenjang_tingkat','','keterangan','keterangan','',''); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Pembayaran</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('jenis_pembayaran','mst_jenis_pembayaran_siswa','','keterangan','keterangan','',''); ?>
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