
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
			echo form_open_multipart('admin/mst_sakip_komponen/edit');	
			echo "<input type='hidden' name='id' value='$r[id_komponen]'>";
		?>
	
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">ALFABET</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'alfa','','', 1, $r['alfa'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">KOMPONEN</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'komponen','','', 1, $r['komponen'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">BOBOT</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'bobot','','', 1, $r['bobot'],'');?>
								</div>
						</div>
						
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label"></label>
								<div class="col-lg-9 col-xl-6">
									<button type="submit" name="submit" class="btn btn-info"><i class="ace-icon fa fa-check bigger-110"></i>Simpan</button>
								
								</div>
						</div>								
					</div>
			</div>			
		</fieldset>
		
		
			</form>
		<?php
			}
		?>
	</div>
	</div>