<?php
class sertifikasi_siswa extends CI_Controller{
    
    var $folder =   "admin/sertifikasi_siswa";
    var $tables =   "sertifikasi_siswa";
    var $pk     =   "id_sertifikasi_siswa";
    var $title  =   "Sertifikasi Siswa";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query 		 	  	=  "SELECT * FROM sertifikasi_siswa Order by NIS";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);
    }

	function post()
    {
        if(isset($_POST['submit']))
        {
			
            $UNITKERJA_SING 			=   $this->input->post('UNITKERJA_SING');
            $kd_unit 					=   $this->input->post('kd_unit');
            $nama 						=   $this->input->post('nama');
            $NIS						=   $this->input->post('NIS');
            $sertifikasi_kompetensi		=   $this->input->post('sertifikasi_kompetensi');
            $bidang_kompetensi			=   $this->input->post('bidang_kompetensi');
            $status_sertifikasi			=   $this->input->post('status_sertifikasi');
            $penyelenggara				=   $this->input->post('penyelenggara');
            $waktu						=   $this->input->post('waktu');
           
            $data   			=   array(	'nama'=>$nama,
											'NIS'=>$NIS,
											'sertifikasi_kompetensi'=>$sertifikasi_kompetensi,
											'bidang_kompetensi'=>$bidang_kompetensi,
											'status_sertifikasi'=>$status_sertifikasi,
											'penyelenggara'=>$penyelenggara,
											'waktu'=>$waktu,
											'kd_unit'=> $kd_unit,
											'UNITKERJA_SING'=> $UNITKERJA_SING
											);
           
            $this->db->insert($this->tables,$data);
           redirect('admin/sertifikasi_siswa');
        }
        else
        {
			//Status Sertifikasi
			$query = "SELECT keterangan FROM status_register";
			$data['record']=  $this->db->query($query)->result_array();
			
            $data['title']=  $this->title;
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
	function edit()
    {
        if(isset($_POST['submit']))
        {
			$UNITKERJA_SING 			=   $this->input->post('UNITKERJA_SING');
            $kd_unit 					=   $this->input->post('kd_unit');
            $nama 						=   $this->input->post('nama');
            $NIS						=   $this->input->post('NIS');
            $sertifikasi_kompetensi		=   $this->input->post('sertifikasi_kompetensi');
            $bidang_kompetensi			=   $this->input->post('bidang_kompetensi');
            $status_sertifikasi			=   $this->input->post('status_sertifikasi');
            $penyelenggara				=   $this->input->post('penyelenggara');
            $waktu						=   $this->input->post('waktu');
            
           
            $id     		= $this->input->post('id');
            $data   			=   array(	'nama'=>$nama,
											'NIS'=>$NIS,
											'sertifikasi_kompetensi'=>$sertifikasi_kompetensi,
											'bidang_kompetensi'=>$bidang_kompetensi,
											'status_sertifikasi'=>$status_sertifikasi,
											'penyelenggara'=>$penyelenggara,
											'waktu'=>$waktu,
											'kd_unit'=> $kd_unit,
											'UNITKERJA_SING'=> $UNITKERJA_SING
											);
           
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
			redirect('admin/sertifikasi_siswa');
        }
        else
        {
			//UNIT KERJA
			$query = "SELECT UNITKERJA_SING FROM users";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//KODE UNIT
			$query = "SELECT UNITKERJA_SING,kd_unit FROM users";
			$data['record4']=  $this->db->query($query)->result_array();
			
			//Status Sertifikasi
			$query = "SELECT keterangan FROM status_register";
			$data['record']=  $this->db->query($query)->result_array();
			
            $data['title']=  $this->title;
            $id          =  $this->uri->segment(4);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            $this->template->load('template', $this->folder.'/edit',$data);
        }
    }
    function delete()
    {
        $id     =  $this->uri->segment(4);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(4));
        }
        redirect('admin/sertifikasi_siswa');
    }


}