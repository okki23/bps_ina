

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
					echo "<input type='text' name='id' value='$y[id_personal_dosen]'>";

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
						<td><?php echo $r['NAMA'];?>
							<input type="hidden" name="NIP" class="form-control" value="<?php echo $y['NIP'];?>">
							<input type="hidden" name="NAMA" class="form-control" value="<?php echo $y['NAMA'];?>">
							<input type="hidden" name="NAMAGELAR" class="form-control" value="<?php echo $y['NAMAGELAR'];?>">
							<input type="hidden" name="KD_UNITKERJA" class="form-control" value="<?php echo $y['KD_UNITKERJA'];?>">
							<input type="hidden" name="kd_unit" class="form-control" value="<?php echo $y['kd_unit'];?>">
							<input type="hidden" name="UNITKERJA" class="form-control" value="<?php echo $y['kd_unit'];?>">
							<input type="hidden" name="UNITKERJA_SING" class="form-control" value="<?php echo $y['UNITKERJA_SING'];?>">
							<input type="hidden" name="no_ktp" class="form-control" value="<?php echo $y['no_ktp'];?>">
							<input type="hidden" name="longitude" class="form-control" value="0">
							<input type="hidden" name="latitude" class="form-control" value="0">
						</td>
				</tr>
				<tr>
					<th width="1%"></th><td>NIP</td><td><?php echo $y['nipbaru'];?></td>
				</tr>
				<tr>
					<th width="1%"></th>
					<td>Unit Kerja</td>
					<td><?php echo $y['UNITKERJA_SING'];?></td>
				</tr>
				<tr><th width="1%"></th><td>KTP</td><td><?php echo $y['no_ktp'];?>
						</td></tr>
				<tr><th width="1%"></th><td>Alamat</td><td><p><?php echo $y['alamat'];?></p></td></tr>
			</tbody>
		</table>
		

			<?php {  ?>
			<INPUT type="button" value="Tambah Mata Pelajaran " onclick="addRow('dataTable')"/>
			<table class="table table-bordered">
					<tr>
						<table id="dataTable" class="table table-bordered">
							<tr>
								<td>
									<p class="mb-2">Mata Pelajaran</p>
									<input type='text' name='mata_pelajaran[]' class="form-control" id="mata_pelajaran">
									<input type='hidden' name='nipbaru[]' class="form-control" id="nipbaru" value="<?php echo $y['nipbaru'];?>">
								</td>
								<td>
									<p class="mb-2">Tanggal Mulai</p>
									<input type="date" name='tanggal_mulai[]' class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai">
								</td>
								<td>
									<p class="mb-2">Tanggal Akhir</p>
									<input type="date" name='tanggal_selesai[]' class="form-control" id="tanggal_selesai" placeholder="Tanggal Selesai">
								</td>
							</tr>
						</TABLE>
							<div class="clearfix form-actions">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" name="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>Simpan</button>
								</div>
							</div>
					</tr>
			</table>
							</form>
							<?php
					}}
							?>		
						
		
		
		
		
		</div>
	</div>