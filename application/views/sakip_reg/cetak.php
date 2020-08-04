<body onLoad="window.print()">


<style type="text/css" >
    body
    {
        font-family: sans-serif;
        font-size: 14px;
    }
    th{
        padding: 5px;
        font-weight: bold;
        font-size: 14px;
    }
    td{
        font-size: 12px;
    }
    h2{
        text-align: center;
        margin-bottom: 13px;
    }
	table td, table td * {
    vertical-align: top;
}
       table { page-break-inside:auto }
        tr    { page-break-inside:avoid; page-break-after:auto }
		
		
		
		/*design table 1*/
.table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
}
 
.table1, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
}
</style>

<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
					
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<center><img src="<?php echo base_url();?>template/assets/img/logo.png" alt="" width="80" height="80"/>
							<br><h4><u>SURAT TUGAS</u><br>
							Nomor : <?php echo $y['no_st'];?>
							</h4> 
						</center>
						<br>
					</div>
				</div>
				
				<div class="box-body">	
					<div class="row">
						<p>Inspektur Daerah Kabupaten Sampang dengan ini menugaskan kepada Saudara :</p>
						<table id="table1" class="table1" width="100%">
			<thead>
				<tr>
					<th>No.</th>
					<th>NAMA</th>
					<th>NIP</th>
					<th>JABATAN ST</th>
					
				</tr>
			</thead>

			<tbody>
				<?php
					$i=1;
					foreach ($p as $r)
					 {
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo pegawai ($r->nip);?></td>
					<td><?php echo $r->nip;?></td>
					<td><?php echo $r->jabatan_st;?></td>
				</tr>
				<?php $i++;}?>
			</tbody>	
		</table>	
		<p>Untuk melaksanakan tugas &nbsp;<?php echo $y['desk_st'];?> pada &nbsp;<?php echo satker($y['tujuan']);?>. Pelaksanaan tugas dimaksud dilaksanakan pada tanggal 
			&nbsp; <?php echo tgl_indo($y['start']);?>&nbsp; s.d &nbsp; <?php echo tgl_indo($y['end']);?>
		</p>
						
					</div>  
				</div>  
              </div>
            </div>
          </div>
		</section>
    </div>
</body>
  
  