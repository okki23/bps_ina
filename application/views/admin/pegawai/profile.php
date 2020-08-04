<div class="profile">
	<div class="profile-header">
		<div class="profile-header-cover"></div>
		<div class="profile-header-content">
			<?php 
					$nip  =  $this->uri->segment(5);
					$nipbaru  =  $this->uri->segment(4);
			?>
			
			<div class="profile-header-img">
				<img src="https://intranet.kemenperin.go.id/thumbnail.php?file=/files/sipegi/foto/<?php echo $nip;?>.jpg&max_width=110&max_height=110" align="left">
			</div>
			<div class="profile-header-info">
				<h4 class="mt-0 mb-1"><?php echo $r['NAMA'];?></h4>
				<p class="mb-2"><?php echo $r['jabatan'];?></p>
				<p class="mb-2"><?php echo $r['UNITKERJA_SING'];?></p>
			</div>
		</div>
		<ul class="profile-header-tab nav nav-tabs">
			<li class="nav-item"><a href="#profile-post" class="nav-link active" data-toggle="tab">Biodata</a></li>
			<li class="nav-item"><a href="#profile-jabatan" class="nav-link" data-toggle="tab">Riwayat Jabatan</a></li>
			<li class="nav-item"><a href="#profile-pendidikan" class="nav-link" data-toggle="tab">Pendidikan</a></li>
			
		</ul>
	</div>
</div>

<div class="profile-content">
	<div class="tab-content p-0">
		<div class="tab-pane fade show active" id="profile-post">
			<table class="table m-b-0">
				<tr><td>Tanggal Lahir</td><td>:</td><td ><?php echo tgl_indo($r['TGL_LAHIR']);?></td></tr>
				<tr><td>Usia Pegawai</td><td>:</td>
					<td>
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
		<div class="tab-pane fade show active" id="profile-jabatan">
			<table class="table m-b-0">
				<thead>
					  <tr class="font-size-sm text-muted">
						 
						  <th class="text-center">No</th>
						  <th>Nama Jabatan</th>
						  <th>Periode</th>
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
						  <small><tr class="font-size-sm text-muted">
							 <td><?php echo $i;?></td>
								<td width="300px"><b><?php echo $jab['nama'];?></b><br>
									<i><?php echo $jab['unitkerja'];?></i></td>
								<td><?php echo tgl_indo($jab['tgl_mulai']);?> - <?php echo tgl_indo($jab['tgl_selesai']);?></td>
								<td><?php echo $jab['no_sk'];?></td>
							   <td><?php echo tgl_indo($jab['tgl_sk']);?></td>


							  </tr>  </small>  
							<?php $i++;}?>
				   </tbody>
			</table>
			
			
		</div>
		<div class="tab-pane fade show active" id="profile-pendidikan">
			<table class="table m-b-0">
				<thead>
					<tr class="font-size-sm text-muted">
						  <th class="text-center">No</th>
						  <th>NAMA Sekolah</th>
						  <th>Jurusan</th>
						  <th>No Ijasah</th>
						  <th>Tk. Ijasah</th>
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
		</div>

</div>