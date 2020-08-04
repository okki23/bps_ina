<?php
class users extends CI_Controller{
    
    var $folder =   "admin/users";
    var $tables =   "users";
    var $pk     =   "id_users";
    var $title  =   "Users";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $data['title']=  $this->title;
        $data['record']=  $this->db->get($this->tables)->result();
		$this->template->load('template', $this->folder.'/view',$data);
    }
    
    
    function post()
    {
        if(isset($_POST['submit']))
        {
            $nip 				 =   $this->input->post('nip');
			$nama 				 =   $this->input->post('nama');
			$UNITKERJA_SING 	 =   $this->input->post('UNITKERJA_SING');
			$kd_unit 			 =   $this->input->post('kd_unit');
			$level 				 =   $this->input->post('level');
			$status 			 =   $this->input->post('status');
			$password  			 =   $this->input->post('password');
           
            
            $data   			=   array('nip'=>$nip,'nama'=>$nama,'UNITKERJA_SING'=>$UNITKERJA_SING, 'kd_unit'=>$kd_unit,
											'level'=>$level,'status'=>$status,
											'password'=>md5($password));
           
            $this->db->insert($this->tables,$data);
            redirect(base_url('admin/users'));
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
            $nip 				 =   $this->input->post('nip');
			$nama 				 =   $this->input->post('nama');
			$kd_unit 			 =   $this->input->post('kd_unit');
			$level 				 =   $this->input->post('level');
			$status 			=   $this->input->post('status');
            $id     			= $this->input->post('id');
            $data   			=   array('nip'=>$nip,'nama'=>$nama,'kd_unit'=>$kd_unit,
											'level'=>$level,'status'=>$status
											);
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect(base_url('admin/users'));
        }
        else
        {
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
        redirect(base_url('admin/users'));
    }
    
    
   
}