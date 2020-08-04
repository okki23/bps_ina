
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
			echo "<input type='hidden' name='id' value='$r[id_bmn_gedung]'>";
		?>
		
		<hr>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nama Gedung</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'nama_gedung','','', 1, $r['nama_gedung'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Lokasi Gedung</label>
				<div class="col-md-8">
					<textarea name='lokasi_gedung' class="form-control" rows="3"><?php echo $r['lokasi_gedung'] ?></textarea>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Luas Gedung</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'luas_gedung','','', 1, $r['luas_gedung'],'');?>
					<small class="f-s-12 text-grey-darker">Format Bilangan Dalam Meter <sup>2</sup></small>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Tahun berdiri</label>
				<div class="col-md-1">
					<?php echo inputan('text', 'tahun_berdiri','','', 1, $r['tahun_berdiri'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Tahun Terakhir Renovasi</label>
				<div class="col-md-1">
					<?php echo inputan('text', 'tahun_terakhir_renovasi','','', 1, $r['tahun_berdiri'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Arsitek Terakhir</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'arsitek_terakhir','','', 1, $r['arsitek_terakhir'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Kontraktor Terakhir</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'kontraktor_terakhir','','', 1, $r['kontraktor_terakhir'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Status Kondisi Gedung</label>
				<div class="col-md-3">
					<?php echo editcombo('status_kondisi_gedung','mst_kondisi_gedung','','keterangan','id_mst_gedung','','',$r['status_kondisi_gedung']); ?>
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Keluhan Status Gedung</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'keluhan_status_gedung','','', 1, $r['keluhan_status_gedung'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nilai Gedung</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'nilai_gedung','','', 1, $r['nilai_gedung'],'');?>
					<small class="f-s-12 text-grey-darker">Format Bilangan Desimal</small>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Jumlah Gedung</label>
				<div class="col-md-1">
					<?php echo inputan('number', 'jumlah_gedung','','', 1, $r['jumlah_gedung'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Harcopy</label>
				<div class="col-md-3">
					<?php echo editcombo('harcopy','mst_pilihan','','keterangan','keterangan','','',$r['harcopy']); ?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Softcopy PDF</label>
				<div class="col-md-3">
					<?php echo editcombo('softcopy_pdf','mst_pilihan','','keterangan','keterangan','','',$r['softcopy_pdf']); ?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Softcopy CAD</label>
				<div class="col-md-3">
					<?php echo editcombo('softcopy_cad','mst_pilihan','','keterangan','keterangan','','',$r['softcopy_cad']); ?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Softcopy 3D</label>
				<div class="col-md-3">
					<?php echo editcombo('softcopy_3d','mst_pilihan','','keterangan','keterangan','','',$r['softcopy_3d']); ?>
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2"></label>
				<div class="col-md-10">
					<input type="submit" name="submit" value="Simpan Data" class="btn btn-success">
				</div>
		</div>
	
		
	</form>
		<?php
			}
		?>
	</div>
	</div>