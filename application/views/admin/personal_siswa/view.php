
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
			if($this->session->userdata('level')==1)
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
		
		<?php echo form_open('admin/personal_siswa'); ?>
			<div class="container">
				<div class="form-group row">
					<div class="col-md-4">
						<div class="form-material">
							<select name="tahun_pendaftaran" id="example-material" class="form-control">
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
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="1%" >No.</th>
				<th width="4%">TAHUN</th>
				<th>SATKER</th>
				<th>NAMA SISWA</th>
				<th>NIM</th>
				<th>NIK</th>
				<th width="4%">PROFIL</th>
				<th width="4%">EDIT</th>
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
			<td><?php echo $r->tahun_pendaftaran;?></td>
			<td><?php echo $r->UNITKERJA_SING;?></td>
			<td><?php echo $r->nama_siswa;?></td>
			<td><?php echo $r->NIM;?></td>
			<td><?php echo $r->NIK;?></td>
			
			<td>
				<a href="<?php echo base_url('admin/registrasi/profil/'.$r->id_registrasi) ?>"class="btn btn-warning btn-sm"><i class="fa fa-user"></i></a>
			</td>
		
			<td>
				<div align="center">
					<a href="<?php echo base_url('admin/registrasi/edit_siswa/'.$r->id_registrasi) ?>"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
				</div>
			</td>
		</tr>
		<?php $i++;}?>
	</tbody>	
	</table>	
	<?php }} ?>	
		</div>
	</div>