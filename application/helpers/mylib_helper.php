<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('generatehtml'))
{
	function rp($x)
       {
            if(is_int($x)==FALSE)
            {
                return '';
            }
            else
            {
           return number_format((int)$x,0,",",".");
            }
       }
       
       function waktu()
       {
           date_default_timezone_set('Asia/Jakarta');
           return date("Y-m-d H:i:s");
       }
              
       function tgl_indo($tgl)
       {
            return substr($tgl, 8, 2).' '.getbln(substr($tgl, 5,2)).' '.substr($tgl, 0, 4);
       }
	   
	   
	   function tahun($tgl)
       {
            return substr($tgl, 0, 4);
       }
    
    function tgl_indojam($tgl,$pemisah)
    {
        return substr($tgl, 8, 2).' '.getbln(substr($tgl, 5,2)).' '.substr($tgl, 0, 4).' '.$pemisah.' '.  substr($tgl, 11,8);
    }
    
    
    function getbln($bln)
    {
        switch ($bln) 
        {
            
            case 1:
                return "Januari";
            break;
        
            case 2:
                return "Februari";
            break;
        
            case 3:
                return "Maret";
            break;
        
            case 4:
                return "April";
            break;
        
            case 5:
                return "Mei";
            break;
        
            case 6:
                return "Juni";
            break;
        
            case 7:
                return "Juli";
            break;
        
            case 8:
                return "Agustus";
            break;
        
            case 9:
                return "September";
            break;
        
             case 10:
                return "Oktober";
            break;
        
            case 11:
                return "November";
            break;
        
            case 12:
                return "Desember";
            break;
        }
        
    }
    
    function selisihTGl($tgl1,$tgl2)
    {
        $pecah1 = explode("-", $tgl1);
        $date1 = $pecah1[2];
        $month1 = $pecah1[1];
        $year1 = $pecah1[0];

        // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
        // dari tanggal kedua

        $pecah2 = explode("-", $tgl2);
        $date2 = $pecah2[2];
        $month2 = $pecah2[1];
        $year2 =  $pecah2[0];

        // menghitung JDN dari masing-masing tanggal

        $jd1 = GregorianToJD($month1, $date1, $year1);
        $jd2 = GregorianToJD($month2, $date2, $year2);

        // hitung selisih hari kedua tanggal

        $selisih = $jd2 - $jd1;
        return $selisih;
    }
    
    function seoString($s) 
    {
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d

        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }
    
    
    function breacumb($link)
    {
        $CI =& get_instance();
        $main=$CI->db->get_where('mainmenu',array('link'=>$link));
        if($main->num_rows()>0)
        {
            $main=$main->row_array();
            return $main['nama_mainmenu'];
        }
        else
        {
            $sub=$CI->db->get_where('submenu',array('link'=>$link));
            if($sub->num_rows()>0)
            {
                $sub=$sub->row_array();
                return $sub['nama_submenu'];
            }
            else
            {
                return 'tidak diketahui';
            }
        }
    }
    
    function jmlPaging()
    {
        return 10;
    }
    
    function getusersLogin($idusers,$field)
    {
        $CI =& get_instance();
        $row=$CI->db->get_where('app_users',array('id_users'=>$idusers));
        if($row->num_rows()>0)
        {
            $row=$row->row_array();
            return $row[$field];
        }
        else
        {
            return '';
        }
    }


 function is_libur($thedate) {

  
    if (strlen($thedate)>8) { //format : dd-mm-yyyy
        $tgl=substr($thedate,0,2); $bln=substr($thedate,3,2); $thn=substr($thedate,6,4);
    }
    else { //format : ddmmyyyy
        $tgl=substr($thedate,0,2); $bln=substr($thedate,2,2); $thn=substr($thedate,4,4);
    }

     
     $CI     =   & get_instance();
     $sql    ="  SELECT uraian FROM libur WHERE date_format(tanggal, '%d%m%Y')='$tgl$bln$thn' ";
    
      $data=$CI->db->query($sql);
        if($data->num_rows()>0)
         {
            $r=$data->row_array();
             return $r['uraian'];
        }
        else
        {
            return '';
        } 
}  

   function ddmmyyyy($tgl,$bln,$thn) {
    if (strlen($tgl)<2)
        $tgl="0".$tgl;

    if (strlen($bln)<2)
        $bln="0".$bln;

    if (strlen($thn)==2)
        $thn="20".$thn;

    return "$tgl$bln$thn";
}

function yyyymmdd($tgl,$bln,$thn) {
    if (strlen($tgl)<2)
        $tgl="0".$tgl;

    if (strlen($bln)<2)
        $bln="0".$bln;

    if (strlen($thn)==2)
        $thn="20".$thn;

    return "$thn$bln$tgl";
}



function harigawe($thedate, $elapsed){
    error_reporting(0);
   
     if (strlen($thedate)==8) { //ddmmyyyy
        $tgl=substr($thedate,0,2); $bln=substr($thedate,2,2); $thn=substr($thedate,4,4);
    }
    else if (strlen($thedate)==10) { //dd-mm-yyyy
        $tgl=substr($thedate,0,2); $bln=substr($thedate,3,2); $thn=substr($thedate,6,4);
    }
    else
        return 0;
  
    // proses menghitung tanggal merah dan hari minggu
    // di antara tanggal awal dan akhir
    for($i=1; $i<=$elapsed; $i++){
        // menentukan tanggal pada hari ke-i dari tanggal awal
        $tanggal = mktime(0, 0, 0, $bln, $tgl+$i, $thn);
        $tglstr = date("Y-m-d", $tanggal);
        $tglstr2=date("dmY", mktime(0,0,0,$bln,$tgl+$i,$thn));
        $liburan=array(is_libur($tglstr2));
 
        // menghitung jumlah tanggal pada hari ke-i
        // yang masuk dalam daftar tanggal merah selain minggu
        if (in_array($tglstr, $liburan)){
           $libur1++;
        }
 
        // menghitung jumlah tanggal pada hari ke-i
        // yang merupakan hari minggu
        if ((date("N", $tanggal) == 7)){
           $libur2++;
        }

        // menghitung jumlah tanggal pada hari ke-i
        // yang merupakan hari minggu
        if ((date("N", $tanggal) == 6)){
           $libur3++;
        }
    }
 
    // menghitung selisih hari yang bukan tanggal merah dan hari minggu
    return $elapsed-$libur1-$libur2-$libur3;
}

   
	function pegawai($nip)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM pegawai WHERE nip='$nip' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['nama'] ;
        }
        else
        {
            return '';
        }
    }
	
	function satker($id_satker)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM satker WHERE id_satker='$id_satker' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['UNITKERJA_SING'] ;
        }
        else
        {
            return '';
        }
    }
	
	function mst_unit_kerja($id_mst_unit_kerja)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_unit_kerja WHERE id_mst_unit_kerja='$id_mst_unit_kerja' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['nama_unit_kerja'] ;
        }
        else
        {
            return '';
        }
    }
	
	
	function rupiah($value, $rp='')
	{
		if($value){
		if(!$rp){
		$formated = str_replace(',', '.', number_format($value));
		return $formated;
		}else{
		$formated = 'Rp '.str_replace(',', '.', number_format($value));
		return $formated;
		}
		}else{
		return '-';
		}
	}
	
    function akses_admin()
    {
         $CI     =   & get_instance();
        $sess=$CI->session->userdata('level');
        if($sess!=1)
        {
            redirect('message'); 
        }
    }
	
	function level($id_level)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM level WHERE id_level='$id_level' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['nama_level'] ;
        }
        else
        {
            return '';
        }
    }
	function jabatan_pegawai($id_jabatan_pegawai)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM jabatan_pegawai WHERE id_jabatan_pegawai='$id_jabatan_pegawai' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['nama_jabatan'] ;
        }
        else
        {
            return '';
        }
    }
	
	function status_aktif($id_status_aktif)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM status_aktif WHERE id_status_aktif='$id_status_aktif' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['status_aktif'] ;
        }
        else
        {
            return '';
        }
    }
	function mst_agama($id_agama)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_agama WHERE id_agama='$id_agama' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['agama'] ;
        }
        else
        {
            return '';
        }
    }
	function mst_golongan_darah($id_golongan_darah)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_golongan_darah WHERE id_golongan_darah='$id_golongan_darah' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['golongan_darah'] ;
        }
        else
        {
            return '';
        }
    }
	
	function mst_status_pernikahan($id_status_pernikahan)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_status_pernikahan WHERE id_status_pernikahan='$id_status_pernikahan' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['status_pernikahan'] ;
        }
        else
        {
            return '';
        }
    }
	
	function mst_kegiatan($id_kegiatan)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_kegiatan WHERE id_kegiatan='$id_kegiatan' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['jenis'] ;
        }
        else
        {
            return '';
        }
    }
	function mst_golongan($id_golongan)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_golongan WHERE id_golongan='$id_golongan' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['golongan'] ;
        }
        else
        {
            return '';
        }
    }
	 function pangkat($kd_pangkat)
    {

        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_pangkat WHERE kd_pangkat='$kd_pangkat' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['uraian'].','.$r['romawi'] ;
        }
        else
        {
            return '';
        }
    }
	function carijabatan($nip)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM jabatan WHERE nip='$nip' order by tgl_sk desc limit 1 ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['nama'].' <br>pada '.$r['unitkerja'];
        }
        else
        {
            return '';
        }
    }
	
	function mst_sertifikat_tanah($id_sertifikat_tanah)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_sertifikat_tanah WHERE id_sertifikat_tanah='$id_sertifikat_tanah' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['keterangan'] ;
        }
        else
        {
            return '';
        }
    }
	
	function mst_kondisi_gedung($id_mst_gedung)
    {
        $CI     =   & get_instance();
        $sql    ="  SELECT * FROM mst_kondisi_gedung WHERE id_mst_gedung='$id_mst_gedung' ";
        $data=$CI->db->query($sql);
        if($data->num_rows()>0)
        {
            $r=$data->row_array();
             return $r['keterangan'] ;
        }
        else
        {
            return '';
        }
    }
	
	function getHitungUmur($tanggal_lahir){
        $date1 = new DateTime(date('Y-m-d', strtotime($tanggal_lahir)));
        $date2 = new DateTime(date('Y-m-d'));
        $interval = $date1->diff($date2);
        //echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
        $data = array(
                'year'=>$interval->y,
                'month'=>$interval->m,
                'day'=>$interval->d
        );
   
        return $data;
    }
	
    
   
}
