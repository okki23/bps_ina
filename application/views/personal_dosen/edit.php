

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
			<?php	if($this->session->userdata('level')==3) { ?>

				<?php
					echo form_open($this->uri->segment(1).'/edit');
					echo "<input type='hidden' name='id' value='$r[id_personal_dosen]'>";

				?>
				<?php 
					$id  	 =  $this->uri->segment(3);
					echo  $this->session->flashdata('pesan'); 
				?>

				
				
				<table class="table table-hover m-b-0 text-inverse">
					<tbody>
						<tr>
							<th width="1%"></th>
								<td>Nama</td>
								<td><input type="text" name="NAMA" class="form-control" value="<?php echo $r['NAMA'];?>" readonly="readonly" >
									<input type="hidden" name="NIP" class="form-control" value="<?php echo $r['NIP'];?>">
									<input type="hidden" name="NAMAGELAR" class="form-control" value="<?php echo $r['NAMAGELAR'];?>">
									<input type="hidden" name="KD_UNITKERJA" class="form-control" value="<?php echo $r['KD_UNITKERJA'];?>">
									<input type="hidden" name="kd_unit" class="form-control" value="<?php echo $r['kd_unit'];?>">
									<input type="hidden" name="UNITKERJA" class="form-control" value="<?php echo $r['kd_unit'];?>">
									<input type="hidden" name="no_ktp" class="form-control" value="<?php echo $r['no_ktp'];?>" readonly="readonly" >
									<input type="hidden" name="longitude" class="form-control" value="0">
									<input type="hidden" name="latitude" class="form-control" value="0">
								</td>
						</tr>
						<tr>
							<th width="1%"></th><td>NIP</td>
							<td><input type="text" name="nipbaru" class="form-control" value="<?php echo $r['nipbaru'];?>" readonly="readonly" ></td>
						</tr>
						<tr>
							<th width="1%"></th>
							<td>Unit Kerja</td>
							<td><input type="text" name="UNITKERJA_SING" class="form-control" value="<?php echo $r['UNITKERJA_SING'];?>" readonly="readonly"></td>
						</tr>
						
						<tr>
							<th width="1%"></th>
							<td>Mata Kuliah/Pelajaran</td>
							<td><input type="text" name="mata_pelajaran" class="form-control" value="<?php echo $r['mata_pelajaran'];?>" ></td>
						</tr>
						
						<tr>
							<th width="1%"></th>
							<td>Tanggal Mulai</td>
							<td><input type="date" name="tanggal_mulai" class="form-control" value="<?php echo $r['tanggal_mulai'];?>" ></td>
						</tr>
						
						<tr>
							<th width="1%"></th>
							<td>Tanggal Selesai</td>
							<td><input type="date" name="tanggal_selesai" class="form-control" value="<?php echo $r['tanggal_selesai'];?>" ></td>
						</tr>
						
						<tr>
							<th width="1%"></th>
							<td></td>
							<td>
								<button type="submit" name="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>Simpan</button>	
							</td>
						</tr>
					</tbody>
				</table>
		
				</form>
					<?php } ?>		
		
		
		
		</div>
	</div>