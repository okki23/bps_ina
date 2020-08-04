
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA T_REKAP_MASTER</h3>
            </div>
            <form action="<?php echo $action; ?>" method="post">
            
<table class='table table-bordered>'        

	    <tr><td width='200'>Nipbaru <?php echo form_error('nipbaru') ?></td><td><input type="text" class="form-control" name="nipbaru" id="nipbaru" placeholder="Nipbaru" value="<?php echo $nipbaru; ?>" /></td></tr>
	    <tr><td width='200'>Id Pns <?php echo form_error('id_pns') ?></td><td><input type="text" class="form-control" name="id_pns" id="id_pns" placeholder="Id Pns" value="<?php echo $id_pns; ?>" /></td></tr>
	    <tr><td width='200'>Id Unor <?php echo form_error('id_unor') ?></td><td><input type="text" class="form-control" name="id_unor" id="id_unor" placeholder="Id Unor" value="<?php echo $id_unor; ?>" /></td></tr>
	    <tr><td width='200'>Status <?php echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td></tr>
	    <tr><td width='200'>NAMA <?php echo form_error('NAMA') ?></td><td><input type="text" class="form-control" name="NAMA" id="NAMA" placeholder="NAMA" value="<?php echo $NAMA; ?>" /></td></tr>
	    <tr><td width='200'>NAMAGELAR <?php echo form_error('NAMAGELAR') ?></td><td><input type="text" class="form-control" name="NAMAGELAR" id="NAMAGELAR" placeholder="NAMAGELAR" value="<?php echo $NAMAGELAR; ?>" /></td></tr>
	    <tr><td width='200'>TGL LAHIR <?php echo form_error('TGL_LAHIR') ?></td><td><input type="date" class="form-control" name="TGL_LAHIR" id="TGL_LAHIR" placeholder="TGL LAHIR" value="<?php echo $TGL_LAHIR; ?>" /></td></tr>
	    <tr><td width='200'>Kd Agama <?php echo form_error('kd_agama') ?></td><td><input type="text" class="form-control" name="kd_agama" id="kd_agama" placeholder="Kd Agama" value="<?php echo $kd_agama; ?>" /></td></tr>
	    <tr><td width='200'>GOL <?php echo form_error('GOL') ?></td><td><input type="text" class="form-control" name="GOL" id="GOL" placeholder="GOL" value="<?php echo $GOL; ?>" /></td></tr>
	    <tr><td width='200'>Sk Pangkat <?php echo form_error('sk_pangkat') ?></td><td><input type="text" class="form-control" name="sk_pangkat" id="sk_pangkat" placeholder="Sk Pangkat" value="<?php echo $sk_pangkat; ?>" /></td></tr>
	    <tr><td width='200'>GOL TMT <?php echo form_error('GOL_TMT') ?></td><td><input type="date" class="form-control" name="GOL_TMT" id="GOL_TMT" placeholder="GOL TMT" value="<?php echo $GOL_TMT; ?>" /></td></tr>
	    <tr><td width='200'>Gol Tgl <?php echo form_error('gol_tgl') ?></td><td><input type="date" class="form-control" name="gol_tgl" id="gol_tgl" placeholder="Gol Tgl" value="<?php echo $gol_tgl; ?>" /></td></tr>
	    <tr><td width='200'>CPNS TMT <?php echo form_error('CPNS_TMT') ?></td><td><input type="date" class="form-control" name="CPNS_TMT" id="CPNS_TMT" placeholder="CPNS TMT" value="<?php echo $CPNS_TMT; ?>" /></td></tr>
	    <tr><td width='200'>Pensiun Tmt <?php echo form_error('pensiun_tmt') ?></td><td><input type="date" class="form-control" name="pensiun_tmt" id="pensiun_tmt" placeholder="Pensiun Tmt" value="<?php echo $pensiun_tmt; ?>" /></td></tr>
	    <tr><td width='200'>Kd Fung <?php echo form_error('kd_fung') ?></td><td><input type="text" class="form-control" name="kd_fung" id="kd_fung" placeholder="Kd Fung" value="<?php echo $kd_fung; ?>" /></td></tr>
	    <tr><td width='200'>Kd Statusfung <?php echo form_error('kd_statusfung') ?></td><td><input type="text" class="form-control" name="kd_statusfung" id="kd_statusfung" placeholder="Kd Statusfung" value="<?php echo $kd_statusfung; ?>" /></td></tr>
	    <tr><td width='200'>Kd Jenjangfung <?php echo form_error('kd_jenjangfung') ?></td><td><input type="text" class="form-control" name="kd_jenjangfung" id="kd_jenjangfung" placeholder="Kd Jenjangfung" value="<?php echo $kd_jenjangfung; ?>" /></td></tr>
	    <tr><td width='200'>Uraian Jenjang <?php echo form_error('uraian_jenjang') ?></td><td><input type="text" class="form-control" name="uraian_jenjang" id="uraian_jenjang" placeholder="Uraian Jenjang" value="<?php echo $uraian_jenjang; ?>" /></td></tr>
	    <tr><td width='200'>Keahlian <?php echo form_error('keahlian') ?></td><td><input type="text" class="form-control" name="keahlian" id="keahlian" placeholder="Keahlian" value="<?php echo $keahlian; ?>" /></td></tr>
	    <tr><td width='200'>Tmt Jenjang <?php echo form_error('tmt_jenjang') ?></td><td><input type="date" class="form-control" name="tmt_jenjang" id="tmt_jenjang" placeholder="Tmt Jenjang" value="<?php echo $tmt_jenjang; ?>" /></td></tr>
	    <tr><td width='200'>PDD <?php echo form_error('PDD') ?></td><td><input type="text" class="form-control" name="PDD" id="PDD" placeholder="PDD" value="<?php echo $PDD; ?>" /></td></tr>
	    <tr><td width='200'>Pendidikan <?php echo form_error('pendidikan') ?></td><td><input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan" value="<?php echo $pendidikan; ?>" /></td></tr>
	    <tr><td width='200'>Pendidikan Duk <?php echo form_error('pendidikan_duk') ?></td><td><input type="text" class="form-control" name="pendidikan_duk" id="pendidikan_duk" placeholder="Pendidikan Duk" value="<?php echo $pendidikan_duk; ?>" /></td></tr>
	    <tr><td width='200'>Diklat Struk Tk <?php echo form_error('diklat_struk_tk') ?></td><td><input type="text" class="form-control" name="diklat_struk_tk" id="diklat_struk_tk" placeholder="Diklat Struk Tk" value="<?php echo $diklat_struk_tk; ?>" /></td></tr>
	    <tr><td width='200'>Diklat Struk <?php echo form_error('diklat_struk') ?></td><td><input type="text" class="form-control" name="diklat_struk" id="diklat_struk" placeholder="Diklat Struk" value="<?php echo $diklat_struk; ?>" /></td></tr>
	    <tr><td width='200'>Diklat Struk Th <?php echo form_error('diklat_struk_th') ?></td><td><input type="text" class="form-control" name="diklat_struk_th" id="diklat_struk_th" placeholder="Diklat Struk Th" value="<?php echo $diklat_struk_th; ?>" /></td></tr>
	    <tr><td width='200'>Diklat Struk Jam <?php echo form_error('diklat_struk_jam') ?></td><td><input type="text" class="form-control" name="diklat_struk_jam" id="diklat_struk_jam" placeholder="Diklat Struk Jam" value="<?php echo $diklat_struk_jam; ?>" /></td></tr>
	    <tr><td width='200'>Diklat Fung <?php echo form_error('diklat_fung') ?></td><td><input type="text" class="form-control" name="diklat_fung" id="diklat_fung" placeholder="Diklat Fung" value="<?php echo $diklat_fung; ?>" /></td></tr>
	    <tr><td width='200'>Pelaksanaan Dikfung <?php echo form_error('pelaksanaan_dikfung') ?></td><td><input type="text" class="form-control" name="pelaksanaan_dikfung" id="pelaksanaan_dikfung" placeholder="Pelaksanaan Dikfung" value="<?php echo $pelaksanaan_dikfung; ?>" /></td></tr>
	    <tr><td width='200'>KD UNITKERJA <?php echo form_error('KD_UNITKERJA') ?></td><td><input type="text" class="form-control" name="KD_UNITKERJA" id="KD_UNITKERJA" placeholder="KD UNITKERJA" value="<?php echo $KD_UNITKERJA; ?>" /></td></tr>
	    <tr><td width='200'>Kd Unit <?php echo form_error('kd_unit') ?></td><td><input type="text" class="form-control" name="kd_unit" id="kd_unit" placeholder="Kd Unit" value="<?php echo $kd_unit; ?>" /></td></tr>
	    <tr><td width='200'>UNITKERJA <?php echo form_error('UNITKERJA') ?></td><td><input type="text" class="form-control" name="UNITKERJA" id="UNITKERJA" placeholder="UNITKERJA" value="<?php echo $UNITKERJA; ?>" /></td></tr>
	    <tr><td width='200'>UNITKERJA SING <?php echo form_error('UNITKERJA_SING') ?></td><td><input type="text" class="form-control" name="UNITKERJA_SING" id="UNITKERJA_SING" placeholder="UNITKERJA SING" value="<?php echo $UNITKERJA_SING; ?>" /></td></tr>
	    <tr><td width='200'>UNITKERJAES1 <?php echo form_error('UNITKERJAES1') ?></td><td><input type="text" class="form-control" name="UNITKERJAES1" id="UNITKERJAES1" placeholder="UNITKERJAES1" value="<?php echo $UNITKERJAES1; ?>" /></td></tr>
	    <tr><td width='200'>UNITKERJAES1 SING <?php echo form_error('UNITKERJAES1_SING') ?></td><td><input type="text" class="form-control" name="UNITKERJAES1_SING" id="UNITKERJAES1_SING" placeholder="UNITKERJAES1 SING" value="<?php echo $UNITKERJAES1_SING; ?>" /></td></tr>
	    <tr><td width='200'>JENIS UNIT <?php echo form_error('JENIS_UNIT') ?></td><td><input type="text" class="form-control" name="JENIS_UNIT" id="JENIS_UNIT" placeholder="JENIS UNIT" value="<?php echo $JENIS_UNIT; ?>" /></td></tr>
	    <tr><td width='200'>Jabatan <?php echo form_error('jabatan') ?></td><td><input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" /></td></tr>
	    <tr><td width='200'>No Sk <?php echo form_error('no_sk') ?></td><td><input type="text" class="form-control" name="no_sk" id="no_sk" placeholder="No Sk" value="<?php echo $no_sk; ?>" /></td></tr>
	    <tr><td width='200'>Tgl Sk <?php echo form_error('tgl_sk') ?></td><td><input type="date" class="form-control" name="tgl_sk" id="tgl_sk" placeholder="Tgl Sk" value="<?php echo $tgl_sk; ?>" /></td></tr>
	    <tr><td width='200'>Tmt Jab <?php echo form_error('tmt_jab') ?></td><td><input type="date" class="form-control" name="tmt_jab" id="tmt_jab" placeholder="Tmt Jab" value="<?php echo $tmt_jab; ?>" /></td></tr>
	    <tr><td width='200'>Tmt Lantik <?php echo form_error('tmt_lantik') ?></td><td><input type="date" class="form-control" name="tmt_lantik" id="tmt_lantik" placeholder="Tmt Lantik" value="<?php echo $tmt_lantik; ?>" /></td></tr>
	    <tr><td width='200'>Duk Tmt Jab <?php echo form_error('duk_tmt_jab') ?></td><td><input type="date" class="form-control" name="duk_tmt_jab" id="duk_tmt_jab" placeholder="Duk Tmt Jab" value="<?php echo $duk_tmt_jab; ?>" /></td></tr>
	    <tr><td width='200'>Tmt Jab Awal <?php echo form_error('tmt_jab_awal') ?></td><td><input type="date" class="form-control" name="tmt_jab_awal" id="tmt_jab_awal" placeholder="Tmt Jab Awal" value="<?php echo $tmt_jab_awal; ?>" /></td></tr>
	    <tr><td width='200'>Ms Kerja Th <?php echo form_error('ms_kerja_th') ?></td><td><input type="text" class="form-control" name="ms_kerja_th" id="ms_kerja_th" placeholder="Ms Kerja Th" value="<?php echo $ms_kerja_th; ?>" /></td></tr>
	    <tr><td width='200'>Ms Kerja Bl <?php echo form_error('ms_kerja_bl') ?></td><td><input type="text" class="form-control" name="ms_kerja_bl" id="ms_kerja_bl" placeholder="Ms Kerja Bl" value="<?php echo $ms_kerja_bl; ?>" /></td></tr>
	    <tr><td width='200'>Kelamin <?php echo form_error('kelamin') ?></td><td><input type="text" class="form-control" name="kelamin" id="kelamin" placeholder="Kelamin" value="<?php echo $kelamin; ?>" /></td></tr>
	    <tr><td width='200'>Umur <?php echo form_error('umur') ?></td><td><input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur; ?>" /></td></tr>
	    <tr><td width='200'>Umurbulan <?php echo form_error('umurbulan') ?></td><td><input type="text" class="form-control" name="umurbulan" id="umurbulan" placeholder="Umurbulan" value="<?php echo $umurbulan; ?>" /></td></tr>
	    <tr><td width='200'>U25 <?php echo form_error('u25') ?></td><td><input type="text" class="form-control" name="u25" id="u25" placeholder="U25" value="<?php echo $u25; ?>" /></td></tr>
	    <tr><td width='200'>U26 <?php echo form_error('u26') ?></td><td><input type="text" class="form-control" name="u26" id="u26" placeholder="U26" value="<?php echo $u26; ?>" /></td></tr>
	    <tr><td width='200'>U31 <?php echo form_error('u31') ?></td><td><input type="text" class="form-control" name="u31" id="u31" placeholder="U31" value="<?php echo $u31; ?>" /></td></tr>
	    <tr><td width='200'>U36 <?php echo form_error('u36') ?></td><td><input type="text" class="form-control" name="u36" id="u36" placeholder="U36" value="<?php echo $u36; ?>" /></td></tr>
	    <tr><td width='200'>U41 <?php echo form_error('u41') ?></td><td><input type="text" class="form-control" name="u41" id="u41" placeholder="U41" value="<?php echo $u41; ?>" /></td></tr>
	    <tr><td width='200'>U46 <?php echo form_error('u46') ?></td><td><input type="text" class="form-control" name="u46" id="u46" placeholder="U46" value="<?php echo $u46; ?>" /></td></tr>
	    <tr><td width='200'>U51 <?php echo form_error('u51') ?></td><td><input type="text" class="form-control" name="u51" id="u51" placeholder="U51" value="<?php echo $u51; ?>" /></td></tr>
	    <tr><td width='200'>U56 <?php echo form_error('u56') ?></td><td><input type="text" class="form-control" name="u56" id="u56" placeholder="U56" value="<?php echo $u56; ?>" /></td></tr>
	    <tr><td width='200'>Lastupdate <?php echo form_error('lastupdate') ?></td><td><input type="text" class="form-control" name="lastupdate" id="lastupdate" placeholder="Lastupdate" value="<?php echo $lastupdate; ?>" /></td></tr>
	    <tr><td width='200'>No Box <?php echo form_error('no_box') ?></td><td><input type="text" class="form-control" name="no_box" id="no_box" placeholder="No Box" value="<?php echo $no_box; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="NIP" value="<?php echo $NIP; ?>" /> 
	    <button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('pegawai2') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
