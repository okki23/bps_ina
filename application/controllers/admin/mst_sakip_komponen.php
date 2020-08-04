<?php
class mst_sakip_komponen extends CI_Controller{
    
    var $folder =   "admin/mst_sakip_komponen";
    var $tables =   "mst_sakip_komponen";
    var $pk     =   "id_komponen";
    var $title  =   "Data Master Komponen SAKIP";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		$query  =  "SELECT * FROM mst_sakip_komponen ORDER BY id_komponen ";
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   
    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
		
            $alfa 							=   $this->input->post('alfa');
            $komponen 						=   $this->input->post('komponen');
            $bobot 							=   $this->input->post('bobot');
            
            $data   =   array('alfa'=> $alfa,'komponen'	=> $komponen,'bobot'=> $bobot);
            $this->db->insert($this->tables,$data);
            redirect('admin/mst_sakip_komponen');
        }
        else
        {
            $data['title']=  $this->title;
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
    function edit()
    {
        if(isset($_POST['submit']))
        {	
			$alfa 		=   $this->input->post('alfa');
            $komponen 	=   $this->input->post('komponen');
            $bobot 		=   $this->input->post('bobot');
           
  
            $id 	= 	$this->input->post('id');
			$data   =   array(	'alfa'=> $alfa,'komponen'	=> $komponen,'bobot'=>$bobot);
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('admin/mst_sakip_komponen');
			
        }
        else
        
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
        redirect('admin/mst_sakip_komponen');
    }
	

