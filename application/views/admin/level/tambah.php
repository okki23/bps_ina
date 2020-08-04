
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><?php echo $title;?></li>
	</ol>
	<h1 class="page-header"><?php echo $title;?></h1>
	<div class="panel panel-inverse">
		<div class="panel-heading"></div>
			<div class="panel-body">
				<?php if($this->session->userdata('level')==1) { ?>
				<?php
					if(isset($error)) {
					echo '<div class="alert alert-warning">';
					echo $error;
					echo '</div>';
					}
					echo validation_errors('<div class="alert alert-success">','</div>');
					echo form_open_multipart('admin/level/tambah');	
				?>
										
					<div class="col-md-6">
						<div class="form-group form-group-lg">
							<label>Level Akses</label>
							<input type="text" name="nama_level" class="form-control" placeholder="Level Akses" value="<?php echo set_value('nama_level') ?>" required>
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