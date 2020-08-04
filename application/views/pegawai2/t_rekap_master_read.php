<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">T_rekap_master Read</h2>
        <table class="table">
	    <tr><td>Nipbaru</td><td><?php echo $nipbaru; ?></td></tr>
	    <tr><td>Id Pns</td><td><?php echo $id_pns; ?></td></tr>
	    <tr><td>Id Unor</td><td><?php echo $id_unor; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>NAMA</td><td><?php echo $NAMA; ?></td></tr>
	    <tr><td>NAMAGELAR</td><td><?php echo $NAMAGELAR; ?></td></tr>
	    <tr><td>TGL LAHIR</td><td><?php echo $TGL_LAHIR; ?></td></tr>
	    <tr><td>Kd Agama</td><td><?php echo $kd_agama; ?></td></tr>
	    <tr><td>GOL</td><td><?php echo $GOL; ?></td></tr>
	    <tr><td>Sk Pangkat</td><td><?php echo $sk_pangkat; ?></td></tr>
	    <tr><td>GOL TMT</td><td><?php echo $GOL_TMT; ?></td></tr>
	    <tr><td>Gol Tgl</td><td><?php echo $gol_tgl; ?></td></tr>
	    <tr><td>CPNS TMT</td><td><?php echo $CPNS_TMT; ?></td></tr>
	    <tr><td>Pensiun Tmt</td><td><?php echo $pensiun_tmt; ?></td></tr>
	    <tr><td>Kd Fung</td><td><?php echo $kd_fung; ?></td></tr>
	    <tr><td>Kd Statusfung</td><td><?php echo $kd_statusfung; ?></td></tr>
	    <tr><td>Kd Jenjangfung</td><td><?php echo $kd_jenjangfung; ?></td></tr>
	    <tr><td>Uraian Jenjang</td><td><?php echo $uraian_jenjang; ?></td></tr>
	    <tr><td>Keahlian</td><td><?php echo $keahlian; ?></td></tr>
	    <tr><td>Tmt Jenjang</td><td><?php echo $tmt_jenjang; ?></td></tr>
	    <tr><td>PDD</td><td><?php echo $PDD; ?></td></tr>
	    <tr><td>Pendidikan</td><td><?php echo $pendidikan; ?></td></tr>
	    <tr><td>Pendidikan Duk</td><td><?php echo $pendidikan_duk; ?></td></tr>
	    <tr><td>Diklat Struk Tk</td><td><?php echo $diklat_struk_tk; ?></td></tr>
	    <tr><td>Diklat Struk</td><td><?php echo $diklat_struk; ?></td></tr>
	    <tr><td>Diklat Struk Th</td><td><?php echo $diklat_struk_th; ?></td></tr>
	    <tr><td>Diklat Struk Jam</td><td><?php echo $diklat_struk_jam; ?></td></tr>
	    <tr><td>Diklat Fung</td><td><?php echo $diklat_fung; ?></td></tr>
	    <tr><td>Pelaksanaan Dikfung</td><td><?php echo $pelaksanaan_dikfung; ?></td></tr>
	    <tr><td>KD UNITKERJA</td><td><?php echo $KD_UNITKERJA; ?></td></tr>
	    <tr><td>Kd Unit</td><td><?php echo $kd_unit; ?></td></tr>
	    <tr><td>UNITKERJA</td><td><?php echo $UNITKERJA; ?></td></tr>
	    <tr><td>UNITKERJA SING</td><td><?php echo $UNITKERJA_SING; ?></td></tr>
	    <tr><td>UNITKERJAES1</td><td><?php echo $UNITKERJAES1; ?></td></tr>
	    <tr><td>UNITKERJAES1 SING</td><td><?php echo $UNITKERJAES1_SING; ?></td></tr>
	    <tr><td>JENIS UNIT</td><td><?php echo $JENIS_UNIT; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $jabatan; ?></td></tr>
	    <tr><td>No Sk</td><td><?php echo $no_sk; ?></td></tr>
	    <tr><td>Tgl Sk</td><td><?php echo $tgl_sk; ?></td></tr>
	    <tr><td>Tmt Jab</td><td><?php echo $tmt_jab; ?></td></tr>
	    <tr><td>Tmt Lantik</td><td><?php echo $tmt_lantik; ?></td></tr>
	    <tr><td>Duk Tmt Jab</td><td><?php echo $duk_tmt_jab; ?></td></tr>
	    <tr><td>Tmt Jab Awal</td><td><?php echo $tmt_jab_awal; ?></td></tr>
	    <tr><td>Ms Kerja Th</td><td><?php echo $ms_kerja_th; ?></td></tr>
	    <tr><td>Ms Kerja Bl</td><td><?php echo $ms_kerja_bl; ?></td></tr>
	    <tr><td>Kelamin</td><td><?php echo $kelamin; ?></td></tr>
	    <tr><td>Umur</td><td><?php echo $umur; ?></td></tr>
	    <tr><td>Umurbulan</td><td><?php echo $umurbulan; ?></td></tr>
	    <tr><td>U25</td><td><?php echo $u25; ?></td></tr>
	    <tr><td>U26</td><td><?php echo $u26; ?></td></tr>
	    <tr><td>U31</td><td><?php echo $u31; ?></td></tr>
	    <tr><td>U36</td><td><?php echo $u36; ?></td></tr>
	    <tr><td>U41</td><td><?php echo $u41; ?></td></tr>
	    <tr><td>U46</td><td><?php echo $u46; ?></td></tr>
	    <tr><td>U51</td><td><?php echo $u51; ?></td></tr>
	    <tr><td>U56</td><td><?php echo $u56; ?></td></tr>
	    <tr><td>Lastupdate</td><td><?php echo $lastupdate; ?></td></tr>
	    <tr><td>No Box</td><td><?php echo $no_box; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pegawai2') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>