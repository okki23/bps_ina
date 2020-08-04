
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
			echo form_open_multipart('admin/mst_sakip_soal/edit');	
			echo "<input type='hidden' name='id' value='$r[id_soal]'>";
		?>
	
		<fieldset>
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">ID KOMPONEN</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="id_komponen" >																	
										<option value="<?php echo $r['id_komponen']?>"><?php echo mst_sakip_komponen($r['id_komponen'])?></option>
										<?php foreach ($record2 as $ass)
											{
										?>
										<option value="<?php echo $ass['id_komponen']?>"> <?php echo $ass['komponen']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">ID SUBKOMPONEN</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="id_subkomponen" >																	
										<option value="<?php echo $r['id_subkomponen']?>"><?php echo mst_sakip_subkomponen($r['id_subkomponen'])?></option>
										<?php foreach ($record3 as $ass)
											{
										?>
										<option value="<?php echo $ass['id_subkomponen']?>"> <?php echo $ass['subkomponen']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">ID INDIKATOR</label>
								<div class="col-lg-9 col-xl-6">
									<select class="form-control" name="id_indikator" >																	
										<option value="<?php echo $r['id_indikator']?>"><?php echo mst_sakip_indikator($r['id_indikator'])?></option>
										<?php foreach ($record4 as $ass)
											{
										?>
										<option value="<?php echo $ass['id_indikator']?>"> <?php echo $ass['indikator']?></option>
										<?php } ?>
												
									</select>
								</div>
						</div>
						
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label">SOAL</label>
								<div class="col-lg-9 col-xl-6">
									<?php echo inputan('text', 'soal','','', 1, $r['soal'],'');?>
								</div>
						</div>
						<div class="form-group row m-b-10">
							<label class="col-lg-3 text-lg-right col-form-label"></label>
								<div class="col-lg-9 col-xl-6">
									<button type="submit" name="submit" class="btn btn-info">Simpan</button>
								
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