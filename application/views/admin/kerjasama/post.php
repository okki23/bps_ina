


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
			echo form_open_multipart('admin/kerjasama/post');	
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
							<label class="col-lg-3 text-lg-right col-form-label">Satker</label>
								<div class="col-lg-9 col-xl-6">
									<?php  
										$result = mysql_query("select * from users");  
										$jsArray = "var prdName = new Array();\n";  
										echo '<select class="form-control" name="prdId" onchange="changeValue(this.value)">';  
										echo '<option>-- PILIH --</option>';  
										while ($row = mysql_fetch_array($result)) {  
											echo '<option value="' . $row['id_users'] . '">' . $row['UNITKERJA_SING'] . '</option>';  
											$jsArray .= "prdName['" . $row['id_users'] . "'] = {name:'" . addslashes($row['UNITKERJA_SING']) . "',desc:'".addslashes($row['kd_unit'])."'};\n";  
										}  
										echo '</select>';  
										?>  
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Satker</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name="UNITKERJA_SING" id="prd_name" class="form-control" readonly />
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Kode Unit Satker</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name="kd_unit" id="prd_desc" class="form-control" readonly />
								</div>
						</div>
						
						<script type="text/javascript">  
						<?php echo $jsArray; ?>
						function changeValue(id){
						document.getElementById('prd_name').value = prdName[id].name;
						document.getElementById('prd_desc').value = prdName[id].desc;
						};
						</script>
						
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Perusahaan</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='nama_perusahaan' placeholder="" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Lokasi Perusahaan</label>
								<div class="col-lg-9 col-xl-6">
									<select class="default-select2 form-control" name='lokasi_perusahaan'>
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
							<label class="col-lg-3 text-lg-right col-form-label">Bidang Perusahaan</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='bidang_perusahaan' placeholder="" class="form-control"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Waktu</label>
								<div class="col-lg-9 col-xl-6">
									<div class="input-group">
										<input type="date" name='start' class="form-control" />
											<span class="input-group-addon">s.d</span>
										<input type="date" name="end" class="form-control"  />
									</div>
								</div>
						</div>

						<div class="form-group row m-b-10"> 
							<label class="col-lg-3 text-lg-right col-form-label">Deskripsi Kerjasama</label>
								<div class="col-lg-9 col-xl-6">	
									<textarea name='nama_kerjasama' class="form-control"> </textarea>
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