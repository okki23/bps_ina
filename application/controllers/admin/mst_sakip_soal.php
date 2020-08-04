<?php
class mst_sakip_soal extends CI_Controller{
    
    var $folder =   "admin/mst_sakip_soal";
    var $tables =   "mst_sakip_soal";
    var $pk     =   "id_soal";
    var $title  =   "Data Master Soal SAKIP";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		$query  =  "SELECT * FROM mst_sakip_soal ORDER BY id_soal ";
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   
    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
		
            $id_komponen 			=   $this->input->post('id_komponen');
            $id_subkomponen 		=   $this->input->post('id_subkomponen');
            $id_indikator 			=   $this->input->post('id_indikator');
            $soal 					=   $this->input->post('soal');
            
            $data   =   array('id_komponen'=> $id_komponen,
							  'id_subkomponen'	=> $id_subkomponen,
							  'id_indikator'=> $id_indikator,
							  'soal'=> $soal
							  );
            $this->db->insert($this->tables,$data);
            redirect('admin/mst_sakip_soal');
        }
        else
        {
			
			//Komponen
			$query = "SELECT id_komponen, komponen FROM mst_sakip_komponen ";
			$data['record2']=  $this->db->query($query)->result_array();
			
			//SubKomponen
			$query = "SELECT id_subkomponen, subkomponen FROM mst_sakip_subkomponen ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//SubKomponen
			$query = "SELECT id_indikator, indikator FROM mst_sakip_indikator ";
			$data['record4']=  $this->db->query($query)->result_array();
				
			
            $data['title']=  $this->title;
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
    function edit()
    {
        if(isset($_POST['submit']))
        {	
			$id_komponen 			=   $this->input->post('id_komponen');
            $id_subkomponen 		=   $this->input->post('id_subkomponen');
            $id_indikator 			=   $this->input->post('id_indikator');
			$soal 					=   $this->input->post('soal');
           
            $id 	= 	$this->input->post('id');
			$data   =   array('id_komponen'=> $id_komponen,
							  'id_subkomponen'	=> $id_subkomponen,
							  'id_indikator'=> $id_indikator,
							  'soal'=> $soal
							  );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
			redirect('admin/mst_sakip_soal');
			
        }
        else
     
			//Komponen
			$query = "SELECT id_komponen, komponen FROM mst_sakip_komponen ";
			$data['record2']=  $this->db->query($query)->result_array();
			
			//SubKomponen
			$query = "SELECT id_subkomponen, subkomponen FROM mst_sakip_subkomponen ";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//SubKomponen
			$query = "SELECT id_indikator, indikator FROM mst_sakip_indikator ";
			$data['record4']=  $this->db->query($query)->result_array();
	
	
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
        redirect('admin/mst_sakip_soal');
    }
	

