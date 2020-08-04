
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
			echo "<input type='hidden' name='id' value='$r[id_akreditasi]'>";
		?>
		
		
		<hr>
		
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="form-group row m-b-10">
							<label class="col-lg-4 text-lg-right col-form-label">Nama Program Studi/Jurusan</label>
								<div class="col-lg-9 col-xl-6">
			
									
									<select class="form-control" name="nama_prodi" value="<?php echo $r['nama_prodi'] ?>" >
										<option value="<?php echo $r['nama_prodi'] ?>"><?php echo $r['nama_prodi'] ?></option>
										
											<?php 
												$kd_unit  =  $this->session->userdata('kd_unit');
										
												$prodi= isset($_GET['prodi']) ? $_GET['prodi'] : '';
												$b="SELECT nama_prodi FROM prodi WHERE kd_unit='$kd_unit' ";
												$s=mysql_query($b);
												while($don=mysql_fetch_array($s)){
										
											?>		
										<option value="<?php echo $don['nama_prodi']?>"><?php echo $don['nama_prodi'];?></option>
										<?php
											}						
										?>
									
									</select>
									
									
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-4 text-lg-right col-form-label">Tahun Akreditasi</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'tahun','','', 1, $r['tahun'],'');?>
								</div>
						</div>
						
						
						<div class="form-group row m-b-10"> 
							<label class="col-lg-4 text-lg-right col-form-label">Status Akreditasi</label>
								<div class="col-lg-9 col-xl-6">	
									<?php echo editcombo('kriteria','akreditasi_kriteria','','kriteria','kriteria','','',$r['kriteria']); ?>
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