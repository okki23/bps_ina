
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
			<?php
					if($this->session->userdata('level')==1)
					{
				?>
				<?php
					// Error
					if(isset($error)) {
						echo '<div class="alert alert-warning">';
						echo $error;
						echo '</div>';
					}

					// Validasi
					echo validation_errors('<div class="alert alert-success">','</div>');

					// Form
					echo form_open_multipart('admin/submenu/tambah');
					$aktif=array(1=>'Aktif',2=>'Tidak Aktif');
					$class_aktif    ="class='form-control' id='aktif'";
					
					
					?>
									
				<div class="col-md-6">
					<div class="form-group">
					<label>Nama Main Menu</label>
					<select name="id_mainmenu" class="form-control">
						<?php foreach($mainmenu as $mainmenu) { ?>
						<option value="<?php echo $mainmenu->id_mainmenu ?>">
						<?php echo $mainmenu->nama_mainmenu ?></option>
						<?php } ?>
					</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Nama Sub Menu</label>
						<input type="text" name="nama_submenu" class="form-control" placeholder="Nama Sub Menu" value="<?php echo set_value('nama_submenu') ?>" required>
						<input type="hidden" name="icon" value="fa fa-circle-o">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-lg">
					<label>Status</label>
						<?php echo form_dropdown('aktif',$aktif,'',$class_aktif);?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Link</label>
						<input type="text" name="link" class="form-control" placeholder="Link" value="<?php echo set_value('link') ?>" required>
					</div>
				</div>
		
				<div class="col-md-6">
					<div class="form-group form-group-lg">
					<label>Level</label>
						<?php echo buatcombo('level','level','','nama_level','id_level','',''); ?>
					</div>
				</div>
		
				<div class="col-md-6">
					<div class="form-group">
						<input type="submit" name="submit" value="Simpan Data" class="btn btn-success btn-lg">
					</div>
				</div>
				
			</form>

		<?php
		}
		?>	
		</div>
	</div>