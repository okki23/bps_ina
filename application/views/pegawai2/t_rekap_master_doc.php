<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>T_rekap_master List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nipbaru</th>
		<th>Id Pns</th>
		<th>Id Unor</th>
		<th>Status</th>
		<th>NAMA</th>
		<th>NAMAGELAR</th>
		<th>TGL LAHIR</th>
		<th>Kd Agama</th>
		<th>GOL</th>
		<th>Sk Pangkat</th>
		<th>GOL TMT</th>
		<th>Gol Tgl</th>
		<th>CPNS TMT</th>
		<th>Pensiun Tmt</th>
		<th>Kd Fung</th>
		<th>Kd Statusfung</th>
		<th>Kd Jenjangfung</th>
		<th>Uraian Jenjang</th>
		<th>Keahlian</th>
		<th>Tmt Jenjang</th>
		<th>PDD</th>
		<th>Pendidikan</th>
		<th>Pendidikan Duk</th>
		<th>Diklat Struk Tk</th>
		<th>Diklat Struk</th>
		<th>Diklat Struk Th</th>
		<th>Diklat Struk Jam</th>
		<th>Diklat Fung</th>
		<th>Pelaksanaan Dikfung</th>
		<th>KD UNITKERJA</th>
		<th>Kd Unit</th>
		<th>UNITKERJA</th>
		<th>UNITKERJA SING</th>
		<th>UNITKERJAES1</th>
		<th>UNITKERJAES1 SING</th>
		<th>JENIS UNIT</th>
		<th>Jabatan</th>
		<th>No Sk</th>
		<th>Tgl Sk</th>
		<th>Tmt Jab</th>
		<th>Tmt Lantik</th>
		<th>Duk Tmt Jab</th>
		<th>Tmt Jab Awal</th>
		<th>Ms Kerja Th</th>
		<th>Ms Kerja Bl</th>
		<th>Kelamin</th>
		<th>Umur</th>
		<th>Umurbulan</th>
		<th>U25</th>
		<th>U26</th>
		<th>U31</th>
		<th>U36</th>
		<th>U41</th>
		<th>U46</th>
		<th>U51</th>
		<th>U56</th>
		<th>Lastupdate</th>
		<th>No Box</th>
		
            </tr><?php
            foreach ($pegawai2_data as $pegawai2)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pegawai2->nipbaru ?></td>
		      <td><?php echo $pegawai2->id_pns ?></td>
		      <td><?php echo $pegawai2->id_unor ?></td>
		      <td><?php echo $pegawai2->status ?></td>
		      <td><?php echo $pegawai2->NAMA ?></td>
		      <td><?php echo $pegawai2->NAMAGELAR ?></td>
		      <td><?php echo $pegawai2->TGL_LAHIR ?></td>
		      <td><?php echo $pegawai2->kd_agama ?></td>
		      <td><?php echo $pegawai2->GOL ?></td>
		      <td><?php echo $pegawai2->sk_pangkat ?></td>
		      <td><?php echo $pegawai2->GOL_TMT ?></td>
		      <td><?php echo $pegawai2->gol_tgl ?></td>
		      <td><?php echo $pegawai2->CPNS_TMT ?></td>
		      <td><?php echo $pegawai2->pensiun_tmt ?></td>
		      <td><?php echo $pegawai2->kd_fung ?></td>
		      <td><?php echo $pegawai2->kd_statusfung ?></td>
		      <td><?php echo $pegawai2->kd_jenjangfung ?></td>
		      <td><?php echo $pegawai2->uraian_jenjang ?></td>
		      <td><?php echo $pegawai2->keahlian ?></td>
		      <td><?php echo $pegawai2->tmt_jenjang ?></td>
		      <td><?php echo $pegawai2->PDD ?></td>
		      <td><?php echo $pegawai2->pendidikan ?></td>
		      <td><?php echo $pegawai2->pendidikan_duk ?></td>
		      <td><?php echo $pegawai2->diklat_struk_tk ?></td>
		      <td><?php echo $pegawai2->diklat_struk ?></td>
		      <td><?php echo $pegawai2->diklat_struk_th ?></td>
		      <td><?php echo $pegawai2->diklat_struk_jam ?></td>
		      <td><?php echo $pegawai2->diklat_fung ?></td>
		      <td><?php echo $pegawai2->pelaksanaan_dikfung ?></td>
		      <td><?php echo $pegawai2->KD_UNITKERJA ?></td>
		      <td><?php echo $pegawai2->kd_unit ?></td>
		      <td><?php echo $pegawai2->UNITKERJA ?></td>
		      <td><?php echo $pegawai2->UNITKERJA_SING ?></td>
		      <td><?php echo $pegawai2->UNITKERJAES1 ?></td>
		      <td><?php echo $pegawai2->UNITKERJAES1_SING ?></td>
		      <td><?php echo $pegawai2->JENIS_UNIT ?></td>
		      <td><?php echo $pegawai2->jabatan ?></td>
		      <td><?php echo $pegawai2->no_sk ?></td>
		      <td><?php echo $pegawai2->tgl_sk ?></td>
		      <td><?php echo $pegawai2->tmt_jab ?></td>
		      <td><?php echo $pegawai2->tmt_lantik ?></td>
		      <td><?php echo $pegawai2->duk_tmt_jab ?></td>
		      <td><?php echo $pegawai2->tmt_jab_awal ?></td>
		      <td><?php echo $pegawai2->ms_kerja_th ?></td>
		      <td><?php echo $pegawai2->ms_kerja_bl ?></td>
		      <td><?php echo $pegawai2->kelamin ?></td>
		      <td><?php echo $pegawai2->umur ?></td>
		      <td><?php echo $pegawai2->umurbulan ?></td>
		      <td><?php echo $pegawai2->u25 ?></td>
		      <td><?php echo $pegawai2->u26 ?></td>
		      <td><?php echo $pegawai2->u31 ?></td>
		      <td><?php echo $pegawai2->u36 ?></td>
		      <td><?php echo $pegawai2->u41 ?></td>
		      <td><?php echo $pegawai2->u46 ?></td>
		      <td><?php echo $pegawai2->u51 ?></td>
		      <td><?php echo $pegawai2->u56 ?></td>
		      <td><?php echo $pegawai2->lastupdate ?></td>
		      <td><?php echo $pegawai2->no_box ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>