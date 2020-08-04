
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
			echo "<input type='hidden' name='id' value='$r[id_bmn_barang_lainnya]'>";
		?>
		
		
		<hr>
		
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
				
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Barang</label>
								<div class="col-lg-9 col-xl-6">
									
										
											<?php echo inputan('text', 'nama_barang','','', 1, $r['nama_barang'],'');?>
										
									
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Merk Barang</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'merk_barang','','', 1, $r['merk_barang'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Barang</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="jenis_barang" >																	
										<option value="<?php echo $r['jenis_barang']?>"><?php echo $r['jenis_barang']?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun Pembelian</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'tahun_pembelian','','', 1, $r['tahun_pembelian'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nilai Barang</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'nilai_barang','','', 1, $r['nilai_barang'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Lokasi Barang</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'lokasi_barang','','', 1, $r['lokasi_barang'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Status Barang</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="status_barang" >																	
										<option value="<?php echo $r['status_barang']?>"><?php echo $r['status_barang']?></option>
										<?php foreach ($record4 as $ass)
											{
										?>
										<option value="<?php echo $ass['keterangan']?>"> <?php echo $ass['keterangan']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Keluhan_kondisi_barang</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'keluhan_kondisi_barang','','', 1, $r['keluhan_kondisi_barang'],'');?>
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