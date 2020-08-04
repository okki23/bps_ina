
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
			echo "<input type='hidden' name='id' value='$r[id_bmn_tanah]'>";
		?>
		
		
		<hr>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nama Tanah</label>
				<div class="col-md-9">
					<?php echo inputan('text', 'nama_tanah','','', 1, $r['nama_tanah'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Luas Tanah</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'luas_tanah','','', 1, $r['luas_tanah'],'');?>
					<small class="f-s-12 text-grey-darker">Dalam Meter Persegi</small>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Lokasi Tanah</label>
				<div class="col-md-10">
					<textarea name='lokasi_tanah' class="form-control" rows="3"><?php echo $r['lokasi_tanah'] ?></textarea>
					<textarea class="form-control" rows="3"></textarea>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Fungsi Tanah</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'fungsi_tanah','','', 1, $r['fungsi_tanah'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Tahun Pembelian</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'tahun_pembelian','','', 0, $r['tahun_pembelian'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nilai Pembelian</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'nilai_pembelian','','', 0, $r['nilai_pembelian'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">NJOP Pembelian</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'njop_pembelian','','', 0, $r['njop_pembelian'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">NJOP Saat Ini</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'njop_saat_ini','','', 0, $r['njop_saat_ini'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nilai Tanah Saat Ini</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'nilai_tanah_sekarang','','', 0, $r['nilai_tanah_sekarang'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nilai PBB Saat Ini</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'nilai_pbb_sekarang','','', 0, $r['nilai_pbb_sekarang'],'');?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Status Sertifikat Tanah</label>
				<div class="col-md-10">
					<?php echo editcombo('id_sertifikat_tanah','mst_sertifikat_tanah','','keterangan','id_sertifikat_tanah','','',$r['id_sertifikat_tanah']); ?>
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nomor Sertifikat</label>
				<div class="col-md-10">
					<?php echo inputan('text', 'no_sertifikat','','', 0, $r['no_sertifikat'],'');?>
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