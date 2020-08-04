
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
			echo "<input type='hidden' name='id' value='$r[id_ruangan]'>";
		?>
		
		
		<hr>
		
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Ruangan</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('nama_ruangan','mst_ruang_rapat','','nama_ruangan','nama_ruangan','','',$r['nama_ruangan']); ?>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Narasumber</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'narasumber','','', 1, $r['narasumber'],'');?>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jumlah Peserta</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'jumlah_peserta','','', 1, $r['jumlah_peserta'],'');?>
								</div>
						</div>

						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Materi</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'materi','','', 1, $r['materi'],'');?>
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
							<label class="col-lg-3 text-lg-right col-form-label">Jam</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<?php echo inputan('time', 'jam_mulai','','', 1, $r['jam_mulai'],'');?>
											<span class="input-group-addon">s.d</span>
										<?php echo inputan('time', 'jam_selesai','','', 1, $r['jam_selesai'],'');?>
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