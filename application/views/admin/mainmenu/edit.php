
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><?php echo $title;?></li>
	</ol>
<h1 class="page-header"><?php echo $title;?></h1>
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title"></h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		
		<div class="panel-body">
			<?php if($this->session->userdata('level')==1) { ?>
				
			<?php
				if(isset($error)) {
					echo '<div class="alert alert-warning">';
					echo $error;
					echo '</div>';
				}
				echo validation_errors('<div class="alert alert-success">','</div>');
				echo form_open_multipart('admin/mainmenu/edit/'.$mainmenu->id_mainmenu);
			?>
				
			<div class="col-md-6">
				<div class="form-group form-group-lg"><label>Nama Main Menu</label>
					<input type="text" name="nama_mainmenu" value="<?php echo $mainmenu->nama_mainmenu ?>" required class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group form-group-lg"><label>Icon</label>
					<?php echo editcombo('icon','icon_menu','','icon','icon','','',$mainmenu->icon); ?>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group form-group-lg">
				<label>Aktif</label>
					<?php echo editcombo('aktif','status_aktif','','status_aktif','id_status_aktif','','',$mainmenu->aktif); ?>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group form-group-lg">
					<label>Link</label>
					<input type="text" name="link" value="<?php echo $mainmenu->link ?>" required class="form-control">
				</div>
			</div>

		<div class="col-md-6">
			<div class="form-group form-group-lg">
			<label>Level</label>
				<?php echo editcombo('level','level','','nama_level','id_level','','',$mainmenu->level); ?>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
			<input type="submit" name="submit" value="Simpan Data" class="btn btn-success btn-lg">
			</div>
		</div>
	</form>
	<?php } ?>
			
			
		</div>
	</div>