
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
		
			
		<?php echo form_open('pendidikan_siswa'); ?>
			<div class="container">
				<div class="form-group row">
					<div class="col-md-4">
						<div class="form-material">
							<select name="tahun" id="example-material" class="form-control">
								<option selected="selected">Tahun</option>
									
									<?php
										for($i=date('Y'); $i>=date('Y')-5; $i-=1){
										echo"<option value='$i'> $i </option>";
										  }
									?>
							</select>  
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-material">
							<button type="submit" name="submit"  class="btn btn-default">
							<i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>        
			</div>  
		</form>
		
	<hr>
	
		
	<?php if(isset($_POST['submit'])) { ?>
	
		<p>
			<a href="<?php echo base_url('pendidikan_siswa/post') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah <?php echo $title;?></a>
		</p>
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="1%">No.</th>
				<th width="4%">TAHUN</th>
				<th>NIM</th>
				<th>NAMA SISWA</th>
				<th>JENIS PRODI</th>
				<th>STRATA</th>
				<th>JENIS KELAS</th>
				<th>JENJANG KELAS</th>
				<th>JENIS PEMBAYARAN</th>
				<th width="4%">EDIT/HAPUS</th>
			</tr>
		</thead>

	<tbody>
		<?php
            $i=1;
            foreach ($record as $r)
             {
        ?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $r->tahun;?></td>
			<td><?php echo $r->NIM;?></td>
			<td><?php echo $r->nama;?></td>
			<td><?php echo $r->nama_prodi;?></td>
			<td><?php echo $r->strata;?></td>
			<td><?php echo $r->jenis_kelas;?></td>
			<td><?php echo $r->jenjang_kelas;?></td>
			<td><?php echo $r->jenis_pembayaran;?></td>
			<td>
				<div align="center">
					<a href="<?php echo base_url('pendidikan_siswa/edit/'.$r->id_pendidikan_siswa) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
					<?php include('delete.php') ?>
				</div>
			
			</td>
			
		</tr>
		<?php $i++;}?>
	</tbody>	
	</table>	
	<?php }} ?>	
		</div>
	</div>