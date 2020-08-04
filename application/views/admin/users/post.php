
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><?php echo $title;?></li>
	</ol>
	<h1 class="page-header"><?php echo $title;?></h1>
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
		<?php echo form_open_multipart('admin/users/post'); ?>
		
	
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Input User</legend>
										
					
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Pegawai</label>
								<div class="col-lg-9 col-xl-6">
									<input name="nama" type="text" class="form-control m-b-5" placeholder="Nama">
									<small class="f-s-12 text-grey-darker">Nama tanpa Gelar</small>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">NIP</label>
								<div class="col-lg-9 col-xl-6">
									<input name="nip" type="text" class="form-control m-b-5" placeholder="NIP">
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">ID Satker</label>
								<div class="col-lg-9 col-xl-6">
									<input name="prdId" class="form-control" onchange="changeValue(this.value)" list="list">
										<datalist id="list">
										<?php
											$result = mysql_query("select * from satker");  
											$jsArray = "var prdName = new Array();\n";  
														 echo '<option>-------</option>';  
														while ($row = mysql_fetch_array($result)) {  
															echo '<option value="' . $row['id_satker'] . '">' . $row['jabatan_satker'] . $row['UNITKERJA_SING'] .'</option>';  
																$jsArray .= "prdName['" . $row['id_satker'] . "'] = {
																kd_unit:'" . addslashes($row['kd_unit']) . "',
																id_satker:'" . addslashes($row['id_satker']) . "',
																UNITKERJA_SING:'".addslashes($row['UNITKERJA_SING'])."'
																};\n";  
														}  
														echo '</select>';  
										?>
										</datalist>   
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Unit Kerja</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name="UNITKERJA_SING" id="UNITKERJA_SING" class="form-control" readonly="" >
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Kode Unit Kerja</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name="kd_unit" id="kd_unit" class="form-control" readonly="" >
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Level</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('level','level','','nama_level','id_level','',''); ?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Status Aktif</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo buatcombo('status','status_aktif','','status_aktif','id_status_aktif','',''); ?>	
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Password</label>
								<div class="col-lg-9 col-xl-6">
									<input name="password" type="text" class="form-control m-b-5" placeholder="Password">	
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
		
		
		
			
		<?php
			}
		?>
		</div>
	</div>
	
	<script type="text/javascript">  
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('UNITKERJA_SING').value = prdName[id].UNITKERJA_SING;
document.getElementById('kd_unit').value = prdName[id].kd_unit;
document.getElementById('id_satker').value = prdName[id].id_satker;


};
</script>