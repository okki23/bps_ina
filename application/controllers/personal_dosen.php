<?php
class personal_dosen extends CI_Controller{
    
    var $folder =   "personal_dosen";
    var $tables =   "personal_dosen";
    var $pk     =   "id_personal_dosen";
    var $title  =   "Dosen Pengajar";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		
		$nip          =  $this->session->userdata('nip');
		$kd_unit          =  $this->session->userdata('kd_unit');
		
		$query  	  =  "SELECT * FROM t_rekap_master WHERE kd_unit=$kd_unit AND jabatan='Dosen' Order by NAMA";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);
    }
	
	
	
	function edit()
    {
        if(isset($_POST['submit']))
        {
            $NIP  			=   $this->input->post('NIP');
            $nipbaru 		=   $this->input->post('nipbaru');
            $NAMA 			=   $this->input->post('NAMA');
            $NAMAGELAR 			=   $this->input->post('NAMAGELAR');
            $KD_UNITKERJA 			=   $this->input->post('KD_UNITKERJA');
            $kd_unit 			=   $this->input->post('kd_unit');
            $UNITKERJA 			=   $this->input->post('UNITKERJA');
            $UNITKERJA_SING 			=   $this->input->post('UNITKERJA_SING');
            $no_ktp 			=   $this->input->post('no_ktp');
            $mata_pelajaran 			=   $this->input->post('mata_pelajaran');
            $tanggal_mulai 			=   $this->input->post('tanggal_mulai');
            $tanggal_selesai 			=   $this->input->post('tanggal_selesai');
            $longitude 			=   $this->input->post('longitude');
            $latitude 			=   $this->input->post('latitude');
           
            $id     		= $this->input->post('id');
            $data   		= array('NIP'=>$NIP,
									'nipbaru'=>$nipbaru,
									'NAMA'=>$NAMA,
									'NAMAGELAR'=>$NAMAGELAR,
									'KD_UNITKERJA'=>$KD_UNITKERJA,
									'kd_unit'=>$kd_unit,
									'UNITKERJA'=>$UNITKERJA,
									'UNITKERJA_SING'=>$UNITKERJA_SING,
									'no_ktp'=>$no_ktp,
									'mata_pelajaran'=>$mata_pelajaran,
									'tanggal_mulai'=>$tanggal_mulai,
									'tanggal_selesai'=>$tanggal_selesai,
									'longitude'=>$longitude,
									'latitude'=>$latitude,
									'post_time'	=> date('Y-m-d')	
									);
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('dosen');	
        }
        else
        {
            $data['title']=  $this->title;
            $id          =  $this->uri->segment(3);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            $this->template->load('template', $this->folder.'/edit',$data);
        }
    }
    function delete()
    {
        $id     =  $this->uri->segment(3);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(3));
        }
        redirect('dosen');	
    }


}
