


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
			echo form_open_multipart($this->uri->segment(1).'/post');
		?>
		<?php 
			$id  	 =  $this->uri->segment(3);
			echo  $this->session->flashdata('pesan'); 
		?>			

		<?php {  ?>
																
		<input type="hidden" name='UNITKERJA_SING' placeholder="" class="form-control" value="<?php echo $this->session->userdata('UNITKERJA_SING');?>"/>
		<input type="hidden" name='kd_unit' placeholder="" class="form-control" value="<?php echo $this->session->userdata('kd_unit');?>"/>	
		
	
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nama Tanah</label>
				<div class="col-md-8">
					<input type="text" name="nama_tanah" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Luas Tanah</label>
				<div class="col-md-8">
					<input type="text" name="luas_tanah" class="form-control m-b-5">
					<small class="f-s-12 text-grey-darker">Format Bilangan Dalam Meter <sup>2</sup></small>
				</div>
		</div>
		
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Lokasi Tanah</label>
				<div class="col-md-8">
					<textarea name='lokasi_tanah' class="form-control" rows="3"></textarea>	
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Fungsi Tanah</label>
				<div class="col-md-8">
					<input type="text" name="fungsi_tanah" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Tahun Pembelian</label>
				<div class="col-md-1">
					<input type="text" name="tahun_pembelian" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nilai Pembelian</label>
				<div class="col-md-2">
					<input type="text" name="nilai_pembelian" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">NJOP Pembelian</label>
				<div class="col-md-10">
					<input type="text" name="njop_pembelian" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">NJOP Saat Ini</label>
				<div class="col-md-10">
					<input type="text" name="njop_saat_ini" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nilai Tanah Saat Ini</label>
				<div class="col-md-10">
					<input type="text" name="nilai_tanah_sekarang" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nilai PBB Saat Ini</label>
				<div class="col-md-10">
					<input type="text" name="nilai_pbb_sekarang" class="form-control m-b-5">
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Status Sertifikat Tanah</label>
				<div class="col-md-10">
					<?php echo buatcombo('id_sertifikat_tanah','mst_sertifikat_tanah','','keterangan','id_sertifikat_tanah','',''); ?>	
				</div>
		</div>
		<div class="form-group row m-b-15">
			<label class="col-form-label col-md-2">Nomor Sertifikat</label>
				<div class="col-md-10">
					<input type="text" name="no_sertifikat" class="form-control m-b-5">
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