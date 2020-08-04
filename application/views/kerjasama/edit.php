
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
			echo "<input type='hidden' name='id' value='$r[id_kerjasama]'>";
		?>
		
		
		<hr>
		
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
				
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Perusahaan</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'nama_perusahaan','','', 1, $r['nama_perusahaan'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Lokasi Perusahaan</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo editcombo('lokasi_perusahaan','kabupaten_kota','','nama_kota','nama_kota','','',$r['lokasi_perusahaan']); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Bidang Perusahaan</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'bidang_perusahaan','','', 1, $r['bidang_perusahaan'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Waktu</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<?php echo inputan('date', 'start','','', 1, $r['start'],'');?>
											<span class="input-group-addon">s.d</span>
										<?php echo inputan('date', 'end','','', 1, $r['end'],'');?>
									</div>
								</div>
						</div>
						<div class="form-group row m-b-10"> 
							<label class="col-lg-3 text-lg-right col-form-label">Deskripsi Kerjasama</label>
								<div class="col-lg-9 col-xl-6">	
									<textarea name='nama_kerjasama' class="form-control"><?php echo $r['nama_kerjasama']; ?></textarea>
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