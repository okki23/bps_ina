
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
			if($this->session->flashdata('sukses')) 
			{
				echo '<div class="alert alert-success">';
				echo $this->session->flashdata('sukses');
				echo '</div>';
			}
				// Error
				echo validation_errors('<div class="alert alert-success">','</div>');
		?>
		
		<p>
			<a href="<?php echo base_url('bmn_gedung/post') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah <?php echo $title;?></a>
		</p>
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="1%"><font size="2">No.</font></th>
				<th width="20%"><font size="2">NAMA GEDUNG</font></th>
				<th width="13%"><font size="2">TAHUN BERDIRI/RENOVASI TERAKHIR</font></th>
				<th width="13%"><font size="2">ARSITEK/KONTRAKTOR TERAKHIR</font></th>
				<th width="13%"><font size="2">STATUS KONDISI GEDUNG</font></th>
				<th width="13%"><font size="2">KELUHAN STATUS GEDUNG</font></th>
				<th width="13%"><font size="2">NILAI GEDUNG</font></th>
				<th width="13%"><font size="2">HARDCOPY /SOFTCOPY PDF/CAD/3D</font></th>
				<th width="4%"></th>
		</thead>

		<tbody>
			<?php
				$i=1;
				foreach ($record as $r)
				 {
			?>
			
			<tr>
				<td><font size="2"><?php echo $i;?></font></td>
				<td><font size="2"><?php echo $r->nama_gedung;?><br>
					<strong>Lokasi = </strong><?php echo $r->lokasi_gedung;?> <br>
					<strong>Jumlah = </strong><?php echo $r->jumlah_gedung;?> <br>
					<strong>Luas = </strong><?php echo $r->luas_gedung;?> <sup>m2</sup>
					</p>
					</font>
				</td>
				<td><font size="2">Tahun Berdiri : <?php echo $r->tahun_berdiri;?><br>Tahun Terakhir Renovasi : <?php echo $r->tahun_terakhir_renovasi;?>
				</font>
				</td>
				<td><font size="2">Arsitek :<?php echo $r->arsitek_terakhir;?><br>
					Kontraktor : <?php echo $r->kontraktor_terakhir;?></font>
				</td>
				<td><font size="2"><?php echo mst_kondisi_gedung ($r->status_kondisi_gedung);?></font></td>
				<td><font size="2"><?php echo $r->keluhan_status_gedung;?></font></td>
				<td><font size="2"><?php echo rupiah($r->nilai_gedung);?></font></td>
				<td><font size="2">
					HARDCOPY :<?php echo $r->harcopy;?><br>
					PDF :<?php echo $r->softcopy_pdf;?><br>
					CAD :<?php echo $r->softcopy_cad;?><br>
					3D	:<?php echo $r->softcopy_3d;?></font>
				</td>
	
				<td>
					<div align="center">
						<a href="<?php echo base_url('bmn_gedung/edit/'.$r->id_bmn_gedung) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
						<?php include('delete.php') ?>
					</div>
				
				</td>
				
			</tr>
			<?php $i++;}?>
		</tbody>	
	</table>	
	<?php } ?>	
		</div>
	</div>