
<div class="profile">
	<div class="profile-header">
		<div class="profile-header-cover"></div>
		<div class="profile-header-content">
			<?php 
				$nip  =  $this->uri->segment(4);
				$nipbaru  =  $this->uri->segment(3);
			?>
			<div class="profile-header-img">
				<img src="https://intranet.kemenperin.go.id/thumbnail.php?file=/files/sipegi/foto/<?php echo $nip;?>.jpg&max_width=120&max_height=115" align="left">
			</div>

			<div class="profile-header-info">
				<h4 class="mt-0 mb-1"><?php echo $r['NAMA'];?></h4>
				<p class="mb-2"><?php echo $r['jabatan'];?></p>
				<p class="mb-2"><?php echo $r['UNITKERJA_SING'];?></p>
			</div>
		</div>
		
		<ul class="profile-header-tab nav nav-tabs">
			<li class="nav-item"><a href="#profile-post" class="nav-link active" data-toggle="tab">RIWAYAT MENGAJAR</a></li>
			<li class="nav-item"><a href="#profile-friend" class="nav-link" data-toggle="tab">PENGALAMAN MAGANG</a></li>
			<li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">BIODATA</a></li>
			<li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">RIWAYAT JABATAN</a></li>
			<li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">PENDIDIKAN</a></li>
		</ul>
	</div>
</div>

<div class="profile-content">
	<div class="tab-content p-0">
		<div class="tab-pane fade show active" id="profile-post">
			<?php 
				$nip  =  $this->uri->segment(4);
				$nipbaru  =  $this->uri->segment(3);
			?>
			<h4>RIWAYAT MENGAJAR</h4>
			
			<a href="<?php echo base_url().'guru/post/'.$r['nipbaru'].'/'.$r['NIP'] ;?>" class="btn btn-primary btn-sm">
				<i class="fa fa-plus"></i>
			</a>		
			<hr>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th width="1%" class="text-center">No</th>
						  <th>Mata Kuliah/Pelajaran</th>
						  <th>Unit Kerja</th>
						  <th>Waktu Mulai</th>
						  <th>Waktu Selesai</th>
						  <th>EDIT/HAPUS</th>
					</tr>
				</thead>
				<tbody> 
				 <?php
					$i=1;
					foreach ($a as $bahan)
					{
					?>
					<small>
						<tr class="font-size-sm text-muted">
							<td><?php echo $i;?></td>
							<td><?php echo $bahan['mata_pelajaran'];?></td>
							<td><?php echo $bahan['UNITKERJA_SING'];?></td>
							<td><?php echo $bahan['tanggal_mulai'];?></td>
							<td><?php echo $bahan['tanggal_selesai'];?></td>
							<td>
								<a href="<?php echo base_url().'personal_guru/edit/'.$bahan['id_personal_guru'];?>" class="btn btn-warning btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<a href="<?php echo base_url().'personal_guru/delete/'.$bahan['id_personal_guru'];?>" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>  
					</small>  
					<?php $i++;}?>
			   </tbody>
			</table>
		</div>
		
		<div class="tab-pane fade" id="profile-friend">
			
			<h4>PENGALAMAN MAGANG</h4>
			
			<a href="<?php echo base_url().'magang_guru/post/'.$r['nipbaru'].'/'.$r['NIP'] ;?>" class="btn btn-primary btn-sm">
				<i class="fa fa-plus"></i>
			</a>		
			<hr>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th width="1%" class="text-center">No</th>
						  <th>Nama Perusahaan</th>
						  <th>Lokasi Perusahaan</th>
						  <th>Bidang Perusahaan</th>
						  <th>Waktu Mulai</th>
						  <th>Waktu Selesai</th>
						  <th>EDIT/HAPUS</th>
					</tr>
				</thead>
				<tbody> 
				 <?php
					$i=1;
					foreach ($m as $mgg)
					{
					?>
					<small>
						<tr class="font-size-sm text-muted">
							<td><?php echo $i;?></td>
							<td><?php echo $mgg['perusahaan'];?></td>
							<td><?php echo $mgg['lokasi'];?></td>
							<td><?php echo $mgg['bidang'];?></td>
							<td><?php echo $mgg['tgl_mulai'];?></td>
							<td><?php echo $mgg['tgl_selesai'];?></td>
	
							<td>
								<a href="<?php echo base_url().'magang_guru/edit/'.$mgg['id_magang'];?>" class="btn btn-warning btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<a href="<?php echo base_url().'magang_guru/delete/'.$mgg['id_magang'];?>" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>  
					</small>  
					<?php $i++;}?>
			   </tbody>
			</table>
		
			
		</div>
		
		<div class="tab-pane fade" id="profile-about">
			<h4>BIODATA</h4>
			<table class="table m-b-0">
				<tr class="font-size-sm text-muted">
                    <td class="font-w600 mb-5">Nama Pegawai</td>
                    <td>:</td>
					<td><?php echo $r['NAMAGELAR'];?></td>
                </tr>  
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">NIP Baru</td>
					<td>:</td>
					<td><?php echo $r['nipbaru'];?></td>
				</tr>   
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Jabatan</td>
					<td>:</td>
						<td class="font-w600 mb-5"><i><?php echo carijabatan($r['nipbaru']);?></i></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo tgl_indo($r['TGL_LAHIR']);?></td>
				</tr>
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Masa Kedinasan</td>
					<td>:</td>
					<td><b class="font-size-sm text-muted">TMT CPNS</b> : <?php echo tgl_indo ($r['CPNS_TMT']);?></td>
				</tr>  
				<tr class="font-size-sm text-muted">
					<td class="font-w600 mb-5">Usia Pegawai</td>
					<td>:</td>
						<td class="font-w600 mb-5">
						<?php
							//USIA
							$tanggal = new DateTime($r['TGL_LAHIR']);
							// tanggal hari ini
							$today = new DateTime('today');
							// tahun
							$y = $today->diff($tanggal)->y;
							// bulan
							$m = $today->diff($tanggal)->m;
							// hari
							$d = $today->diff($tanggal)->d;
							echo "" . $y . " tahun " . $m . " bulan " . $d . " hari";
						?>
						</td>
				</tr>
			</table>
		
		</div>
		<div class="tab-pane fade" id="profile-photos">
			<h4 class="m-t-0 m-b-20">RIWAYAT JABATAN</h4>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
					  <th class="text-center">No</th>
					  <th>NAMA JABATAN</th>
					  <th>PERIODE</th>
					  <th>No.SK</th>
					  <th>Tgl. Sk</th> 
					</tr>
                </thead>
				<tbody> 
					 <?php
						$i=1;
						foreach ($j as $jab)
						{
					?>
				<small>
					<tr class="font-size-sm text-muted">
						<td><?php echo $i;?></td>
						<td width="300px"><b><?php echo $jab['nama'];?></b><br>
								<i><?php echo $jab['unitkerja'];?></i>
						</td>
						<td><?php echo tgl_indo($jab['tgl_mulai']);?> - <?php echo tgl_indo($jab['tgl_selesai']);?></td>
						<td><?php echo $jab['no_sk'];?></td>
						<td><?php echo tgl_indo($jab['tgl_sk']);?></td>
					</tr>  </small>  
					<?php $i++;}?>
				</tbody>
			</table>
			
		</div>
		<div class="tab-pane fade" id="profile-videos">
			<h4 class="m-t-0 m-b-20">PENDIDIKAN</h4>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th class="text-center">No</th>
						  <th>NAMA SEKOLAH</th>
						  <th>JURUSAN</th>
						  <th>NO. IJASAH</th>
						  <th>TK. IJASAH</th>
					</tr>
				</thead>
                <tbody> 
                    <?php
						$i=1;
                        foreach ($p as $pen)
                        {
                    ?>
					<small>
						<tr class="font-size-sm text-muted">
							<td><?php echo $i;?></td>
							<td><?php echo $pen['nama'];?>,<?php echo $pen['tempat'];?></td>
							<td><?php echo $pen['jurusan'];?></td>
							<td><?php echo $pen['no_ijasah'];?></td>
							<td><?php echo $pen['uraian'];?></td>
						</tr>  
					</small>  
                    <?php $i++;}?>
                </tbody>
			</table>
			<br>
			<h4>DIKLAT STRUKTURAL</h4>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th class="text-center">No</th>
						  <th>NAMA DIKLAT</th>
						  <th>WAKTU PELAKSANAAN</th>
						  <th>PENYELENGGARA</th>
						  <th>TAHUN</th>
					</tr>
				</thead>
                <tbody> 
                    <?php
                        $i=1;
                         foreach ($s as $dik)
                        {
                    ?>
					<small>
						<tr class="font-size-sm text-muted">
							<td><?php echo $i;?></td>
							<td><?php echo $dik['uraian'];?></td>
                            <td><?php echo tgl_indo($dik['tgl_mulai']).' - '.tgl_indo($dik['tgl_selesai']);?></td>
                            <td><?php echo $dik['penyelenggara'];?></td>
                            <td><?php echo $dik['tahun'];?></td>
						</tr>  
					</small>  
                    <?php $i++;}?>
                </tbody>
			</table>
			<br>
			<h4>DIKLAT FUNGSIONAL</h4>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th class="text-center">No</th>
						  <th>NAMA DIKLAT</th>
						  <th>WAKTU PELAKSANAAN</th>
						  <th>PENYELENGGARA</th>
						  <th>NO.SERTIFIKAT</th>
					</tr>
				</thead>
                <tbody> 
                    <?php
                            $i=1;
                            foreach ($record as $fung)
                            {
                            ?>
					<small>
						<tr class="font-size-sm text-muted">
							 <td><?php echo $i;?></td>
							 <td><?php echo $fung['nama'];?></td>
                                <td><?php echo tgl_indo($fung['tgl_mulai']).' - '.tgl_indo($fung['tgl_selesai']);?></td>
                                <td><?php echo $fung['penyelenggara'];?></td>
                                <td><?php echo $fung['no_sertifikat'];?></td>
						</tr>  
					</small>  
                    <?php $i++;}?>
                </tbody>
			</table>
			<br>
			<h4>DIKLAT PENUNJANG</h4>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th class="text-center">No</th>
						  <th>NAMA DIKLAT</th>
						  <th>WAKTU PELAKSANAAN</th>
						  <th>PENYELENGGARA</th>
						  <th>NO.SERTIFIKAT</th>
					</tr>
				</thead>
                <tbody> 
                     <?php
                            $i=1;
                            foreach ($record as $jangk)
                            {
                            ?>
					<small>
						<tr class="font-size-sm text-muted">
							 <td><?php echo $i;?></td>
                                <td><?php echo $jangk['nama'];?></td>
								<td><?php echo tgl_indo($jangk['tgl_mulai']).' - '.tgl_indo($jangk['tgl_selesai']);?></td>
                                <td><?php echo $jangk['penyelenggara'];?></td>
                                <td><?php echo $jangk['no_sertifikat'];?></td>
                                
						</tr>  
					</small>  
                    <?php $i++;}?>
                </tbody>
			</table>
			
		</div>
	</div>
</div>
		