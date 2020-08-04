
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
			echo "<input type='hidden' name='id' value='$r[id_bmn_kendaraan]'>";
		?>
		
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nama Kendaraan</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'nama_kendaraan','','', 1, $r['nama_kendaraan'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Merk Kendaraan</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'merk_kendaraan','','', 1, $r['merk_kendaraan'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Jenis Kendaraan</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'jenis_kendaraan','','', 1, $r['jenis_kendaraan'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Tahun Pembelian</label>
				<div class="col-md-1">
					<?php echo inputan('text', 'tahun_pembelian','','', 1, $r['tahun_pembelian'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nilai Pembelian</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'nilai_pembelian','','', 1, $r['nilai_pembelian'],'');?>
					<small class="f-s-12 text-grey-darker">Format Bilangan Tanpa Koma dan Titik</small>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Nilai Saat Ini</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'nilai_sekarang','','', 1, $r['nilai_pembelian'],'');?>
					<small class="f-s-12 text-grey-darker">Format Bilangan Tanpa Koma dan Titik</small>
				</div>
		</div>
		

		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Status Kondisi Kendaraan</label>
				<div class="col-md-3">
				<?php echo editcombo('status_kendaraan','mst_kondisi_gedung','','keterangan','keterangan','','',$r['status_kendaraan']); ?>
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Keluhan Kendaraan</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'keluhan_kendaraan','','', 1, $r['keluhan_kendaraan'],'');?>
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-3">Fungsi Kendaraan</label>
				<div class="col-md-8">
					<?php echo inputan('text', 'fungsi_kendaraan','','', 1, $r['fungsi_kendaraan'],'');?>
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