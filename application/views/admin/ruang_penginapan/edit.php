
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
			echo form_open_multipart('admin/ruang_penginapan/edit');	
			echo "<input type='hidden' name='id' value='$r[id_ruangan]'>";
		?>
		
		
		<hr>
		
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Ruangan</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="nama_ruangan" >																	
										<option value="<?php echo $r['nama_ruangan']?>"><?php echo $r['nama_ruangan']?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['nama_ruangan']?>"> <?php echo $ass['nama_ruangan']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jumlah Bed</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="jumlah_bed" >																	
										<option value="<?php echo $r['jumlah_bed']?>"><?php echo $r['jumlah_bed']?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['jumlah_bed']?>"> <?php echo $ass['jumlah_bed']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Ruangan</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="jenis_ruangan" >																	
										<option value="<?php echo $r['jenis_ruangan']?>"><?php echo $r['jenis_ruangan']?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['jenis_ruangan']?>"> <?php echo $ass['jenis_ruangan']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Lokasi</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'lokasi','','', 1, $r['lokasi'],'');?>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Hari</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'hari','','', 1, $r['hari'],'');?>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tanggal</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<?php echo inputan('date', 'tanggal_mulai','','', 1, $r['tanggal_mulai'],'');?>
											<span class="input-group-addon">s.d</span>
										<?php echo inputan('date', 'tanggal_selesai','','', 1, $r['tanggal_selesai'],'');?>
									</div>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Status</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'status','','', 1, $r['status'],'');?>
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