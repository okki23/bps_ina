
<SCRIPT language="javascript">function addRow(tableID){var table=document.getElementById(tableID);var rowCount=table.rows.length;
var row=table.insertRow(rowCount);var colCount=table.rows[0].cells.length;
for(var i=0;i<colCount;i++){var newcell=row.insertCell(i);newcell.innerHTML=table.rows[0].cells[i].innerHTML;switch(newcell.childNodes[0].type){case"text":newcell.childNodes[0].value="";break;case"checkbox":newcell.childNodes[0].checked=false;break;case"select-one":newcell.childNodes[0].selectedIndex=0;break;}}}
function deleteRow(tableID){try{var table=document.getElementById(tableID);var rowCount=table.rows.length;for(var i=0;i<rowCount;i++){var row=table.rows[i];var chkbox=row.cells[0].childNodes[0];if(null!=chkbox&&true==chkbox.checked){if(rowCount<=1){alert("Cannot delete all the rows.");break;}
table.deleteRow(i);rowCount--;i--;}}}catch(e){alert(e);}}</SCRIPT>



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
			echo form_open_multipart($this->uri->segment(1).'/tambah');
		?>
		<?php 
			$no_st  	 =  $this->uri->segment(3);
			$tujuan     =  $this->uri->segment(4);
			$jenis     =  $this->uri->segment(5);
			$kegiatan     =  $this->uri->segment(6);
			$start     =  $this->uri->segment(7);
			$end     =  $this->uri->segment(8);
			$desk_st     =  $this->uri->segment(9);
			$ttd     =  $this->uri->segment(10);
			echo  $this->session->flashdata('pesan'); 
		?>			

		<?php {  ?>
								
			
			
			
			<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Input Surat Tugas</legend>
										
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tahun</label>
								<div class="col-lg-9 col-xl-6">
									<div class="row row-space-6">
										<div class="col-4">
											<input type="text" name='tahun' value="<?php echo $tahun;?>" class="form-control" readonly="true"/>
										</div>		
									</div>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nomor Surat Tugas</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='no_st' placeholder="Nomor Surat Tugas" class="form-control" required />
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Tempat Tujuan</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" value="<?php echo satker($tujuan);?>" class="form-control" readonly="true"/>
									<input type="hidden" name='tujuan' value="<?php echo $tujuan;?>" class="form-control" readonly="true"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Jenis Kegiatan</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text"  value="<?php echo mst_kegiatan($jenis);?>" class="form-control" readonly="true"/>
									<input type="hidden" name='jenis' value="<?php echo $jenis;?>" class="form-control" readonly="true"/>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Nama Kegiatan</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" name='kegiatan' value="<?php echo rawurldecode($kegiatan) ;?>" class="form-control" readonly="true"/>
							</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Waktu Penugasan</label>
								<div class="col-lg-8">
									<div class="input-group input-daterange">
										<input type="hidden" name='start' value="<?php echo $start;?>" class="form-control" readonly="true"/>
										<input type="text" value="<?php echo tgl_indo($start);?>" class="form-control" readonly="true"/>
										
										<span class="input-group-addon">s.d</span>
										<input type="hidden" name='end' value="<?php echo $end;?>" class="form-control" readonly="true"/>
										<input type="text" value="<?php echo tgl_indo($end);?>" class="form-control" readonly="true"/>
										</div>
								</div>
						</div>	
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Deskripsi Surat Tugas</label>
								<div class="col-lg-9 col-xl-6">
									<textarea name='desk_st' class="form-control" rows="3"><?php echo rawurldecode($desk_st);?></textarea>
							</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">Penandatangan</label>
								<div class="col-lg-9 col-xl-6">
									<input type="text" value="<?php echo pegawai($ttd);?>" class="form-control" readonly="true"/>
									<input type="hidden" name="ttd" value="<?php echo $ttd ;?>" class="form-control" readonly="true"/>
								</div>
						</div>				
					</div>
		</div>			
	</fieldset>
			
			<table class="table table-bordered">
					<tr>
						<td><INPUT type="button" value=" Tambah Pegawai" onclick="addRow('dataTable')"/><td>
							<table id="dataTable" class="table table-bordered">
								<tr>
									<td>
										<input type='hidden' name='ID[]' value="null">
									</td>
									<td>
										<select class="form-control" id="nip" name='nip[]'>
											<?php
												$nama= isset($_GET['nama']) ? $_GET['nama'] : '';
												$b="SELECT * FROM pegawai WHERE jabatan_pegawai in ('1','2','3','4', '5', '13', '14')";
												$s=mysql_query($b);
												while($don=mysql_fetch_array($s)){
											?>
											<option value="<?php echo $don['nip']?>"><?php echo $don['nama'];?></option>
												<?php
														}
												?>
													</select>
												</td>
												<td>
													<select class="form-control" id="jabatan_st" name='jabatan_st[]' >
														<?php
															$jabatan_st= isset($_GET['jabatan_st']) ? $_GET['jabatan_st'] : '';
															$b="SELECT jabatan_st FROM jabatan_st ";
															$s=mysql_query($b);
															while($don=mysql_fetch_array($s)){
														?>
																								
														<option value="<?php echo $don['jabatan_st']?>"><?php echo $don['jabatan_st'];?></option>
														<?php
															}
														?>
													</select>
												</td>
											</tr>
										</TABLE>
											<div class="clearfix form-actions">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" name="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>Simpan</button>
														&nbsp; &nbsp; &nbsp;
													<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
												</div>
											</div>
									</tr>
							</table>
							</form>
							<?php
							}
							?>		
						
		</div>
	</div>