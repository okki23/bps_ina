
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
			if($this->session->userdata('level')==9)
			{  
		?>
		
		<div class="col-xl-6">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table m-b-0">
						<thead>
							<tr>
								<th>Nomor Surat Tugas</th><th>:</th><th><div class="left"><?php echo $y['no_st'];?></div></th>
							</tr>
						</thead>
						<tbody>
							<tr><td>Perihal</td><td>:</td><td><?php echo $y['desk_st'];?></td></tr>
							<tr><td>Tujuan</td><td>:</td><td><?php echo satker ($y['tujuan']);?></td></tr>
							<tr><td>Waktu Penugasan</td><td>:</td><td><?php echo tgl_indo($y['start']);?>&nbsp; s.d &nbsp; <?php echo tgl_indo($y['end']);?></td></tr>
						</tbody>
					</table>
				</div>		
			</div>
		</div>
		
		<a href="<?php echo base_url().''.$this->uri->segment(1).'/cetak/'.$y['id_st'];?>"class="btn btn-success btn-sm"><i class="fa fa-print">Cetak</i></a>
		<hr>
		<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>
				<tr>
					<th>No.</th>
					<th>NAMA</th>
					<th>NIP</th>
					<th>JABATAN ST</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$i=1;
					foreach ($p as $r)
					 {
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo pegawai ($r->nip);?></td>
					<td><?php echo $r->nip;?></td>
					<td><?php echo $r->jabatan_st;?></td>
					
				</tr>
				<?php $i++;}?>
			</tbody>	
		</table>	
	
		<?php
			}
		?>
	</div>
	</div>