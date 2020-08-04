
<div class="profile">
	<div class="profile-header">
		<div class="profile-header-cover"></div>
		
		<ul class="profile-header-tab nav nav-tabs">
			<li class="nav-item"><a href="#profile-post" class="nav-link active" data-toggle="tab"><h4>BIODATA SISWA</h4></a></li>
		</ul>
	</div>
</div>

<div class="profile-content">		
	<div class="tab-content p-0">
		<div class="tab-pane fade show active" id="profile-post">	
			<table class="table m-b-0">
				<tr class="font-size-sm text-muted">
                    <td class="font-w600 mb-5">Nama Siswa</td>
                    <td>:</td>
					<td><?php echo $r['nama_siswa'];?></td>
                </tr>  
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">NIK</td>
					<td>:</td>
					<td><?php echo $r['NIK'];?></td>
				</tr>   
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">NIM</td>
					<td>:</td>
					<td><?php echo $r['NIM'];?></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Tempat Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $r['tempat_lahir'];?> &nbsp;<?php echo tgl_indo($r['tanggal_lahir']);?></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Alamat</td>
					<td>:</td>
					<td><?php echo $r['alamat'];?></td>
				</tr>  
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Kode Pos</td>
					<td>:</td>
					<td><?php echo $r['kode_pos'];?></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $r['jenis_kelamin'];?></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Agama</td>
					<td>:</td>
					<td><?php echo $r['agama'];?></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Tahun Masuk</td>
					<td>:</td>
					<td><?php echo $r['tahun_pendaftaran'];?></td>
				</tr>
				
			</table>
		</div>
	</div>
</div>
		