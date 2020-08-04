<?php
class auth extends CI_Controller
{
      
    function __construct() {
        parent::__construct();
        $this->load->helper('captcha','string');
    }
    
    function index()
    {
        redirect('login');
    }
    
    function login()
    {
        if(isset($_POST['submit']))
        {
            $nip   =  $this->input->post('nip');
            $password   =  $this->input->post('password');
            $capth        = strtoupper( $this->input->post('kode_aman'));
            $login=  $this->db->get_where('users',array('nip'=>$nip,'password'=>  md5($password),'status'=>"1"));
            if($login->num_rows()>0 )
            {
                $r=  $login->row_array();
                $data=array('id_users'=>$r['id_users'],
                            'level'=>$r['level'],
                            'nama'=>$r['nama'],
                            'jabatan_users'=>$r['jabatan_users'],
                            'gambar'=>$r['gambar'],
                            'UNITKERJA_SING'=>$r['UNITKERJA_SING'],
                            'kd_unit'=>$r['kd_unit'],
                            'nip'=>$nip);
                $this->session->set_userdata($data);
                 $this->mcrud->update('users',array('last_login'=>  waktu()), 'nip',$nip);
                redirect('dashboard');
                
            }
            else
            {
                redirect('auth/login');
            }
        }
        else
        {
            
             $vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '100',
                'img_height' => 35,
                'word'	=> strtoupper(random_string('alnum', 5)),
                'border' => 0, 
                'expiration' => 10000200
            );
 
            // create captcha image
            $cap = create_captcha($vals);
 
            // store image html code in a variable
            $data['image'] = $cap['image'];
 
            // store the captcha word in a session
           $this->session->set_userdata('mycaptcha', $cap['word']);
            $this->load->view('login',$data);
        }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    
   
}