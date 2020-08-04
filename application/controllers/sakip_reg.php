<?php
class sakip_reg extends CI_Controller{
 
    var $folder =   "sakip_reg";
    var $tables =   "sakip_jawaban";
    var $pk     =   "id_jawaban";
    var $title  =   "Program Kerja Pengawasan Tahunan Pegawai";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
       if(isset($_POST['submit']))
        {
            $data['start'] =  $this->input->post('start');
            $data['title'] =  $this->input->post('title');
                   }
        else
        {
            $data['start']="";
            $data['title']="";
                   }
        $start 		=  $data['start'];
        $title		 =  $data['title'];
      
		$query  =  "SELECT * FROM users WHERE level='3' ";

        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   
    }
	
    function post()
    {
        if(isset($_POST['submit']))
        {
			$tahun = $this->input->post('tahun');
            $nm = $this->input->post('id_users');
			$result = array();
			foreach($nm AS $key => $val)
			{
			$result[] = array
				(
					"tahun"  				=> $_POST['tahun'],
					"id_users"  			=> $_POST['id_users'][$key],
					"kd_unit"  				=> $_POST['kd_unit'][$key],
					"UNITKERJA_SING"  		=> $_POST['UNITKERJA_SING'][$key],
					"id_soal"  				=> $_POST['id_soal'][$key],
					"id_komponen"  			=> $_POST['id_komponen'][$key],
					"id_subkomponen"  		=> $_POST['id_subkomponen'][$key]
				);
			}    
           
			$test= $this->db->insert_batch('sakip_jawaban', $result); // fungsi  untuk menyimpan multi array ke database
            $this->session->set_flashdata('pesan', "<div class='alert alert-success'>Data $nama Sudah Tersimpan </div>");
            redirect('sakip_reg');
        }
        else
        {
			
			$ID     =  $this->uri->segment(3);
			$query  =  "SELECT id_soal,id_komponen, id_subkomponen, id_indikator, soal, keterangan FROM mst_sakip_soal order by id_soal ";
					
			$data['record']=  $this->db->query($query)->result();
			$data['y']         = $this->db->query($query)->row_array();
			$data['ID']          =  $this->uri->segment(3);
			
			$data['title']=  $this->title;
			$this->template->load('template', $this->folder.'/post',$data);
			
        }
    }
}
