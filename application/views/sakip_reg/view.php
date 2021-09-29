
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
		
	<hr>
	<p><a href="<?php echo base_url('sakip_reg/post') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah <?php echo $title;?></a></p>
	
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>NAMA SATKER</th>
				<th>KODE UNIT</th>
				<th></th>			
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
			<td><?php echo $r->UNITKERJA_SING;?></td>
			<td><?php echo $r->kd_unit;?></td>
			<td>
				<div align="center">
					<a class="btn btn-warning btn-sm" href="<?php echo base_url().''.$this->uri->segment(1).'/post/'.$r->id_users.'/'.$r->kd_unit.'/'.urldecode($r->UNITKERJA_SING);?>">
						Kirim KKE SAKIP
					</a>
				</div>
			</td>
			
		</tr>
		<?php $i++;}?>
	</tbody>	
	</table>	
	<?php } ?>	
		</div>
	</div>