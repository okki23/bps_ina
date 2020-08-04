
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
			
			<div class="box-body">
            <div class='row'>
            <div class='col-md-9'>
            <div style="padding-bottom: 10px;"'>
		<?php echo anchor(site_url('pegawai2/excel'), '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Ms Excel', 'class="btn btn-success btn-sm"'); ?>
		<?php echo anchor(site_url('pegawai2/word'), '<i class="fa fa-file-word-o" aria-hidden="true"></i> Export Ms Word', 'class="btn btn-primary btn-sm"'); ?></div>
            </div>
            <div class='col-md-3'>
            </div>
            </div>
        
   
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                
            </div>
        </div>
		<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="1%">No.</th>
						<th></th>
						<th>NAMA</th>
						<th>UNIT KERJA</th>
					</tr>
				</thead>
				<tbody>
					<?php 	$i=1; foreach ($pegawai2_data as $r)
						{
					?>
					<tr>
						<td><?php echo $i;?></td>
						<td>
							<img src="https://intranet.kemenperin.go.id/thumbnail.php?file=/files/sipegi/foto/<?php echo $r->NIP;?>.jpg&max_width=65&max_height=65" align="left">
						</td>
						<td><?php echo $r->NAMA;?><br>
							NIP.<a href="<?php echo base_url('admin/pegawai/profile/'.$r->nipbaru .'/'.$r->NIP) ?>" ><?php echo strtoupper($r->nipbaru);?></a>
							
							<br><?php echo $r->jabatan;?>
						</td>
						<td><?php echo $r->UNITKERJA_SING;?></td>
					</tr>
					<?php $i++;}?>
					</tbody>
			</table>

        </div>
			
			
			
			
		<?php	
			}
		?>
		</div>
	</div>