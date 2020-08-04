<?php
class bmn_tanah extends CI_Controller{
    
    var $folder =   "bmn_tanah";
    var $tables =   "bmn_tanah";
    var $pk     =   "id_bmn_tanah";
    var $title  =   "BMN Tanah";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
      
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM bmn_tanah WHERE kd_unit='$kd_unit' ORDER BY id_bmn_tanah ";
	
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
            $nama_tanah 				=   $this->input->post('nama_tanah');
            $luas_tanah					=   $this->input->post('luas_tanah');
            $lokasi_tanah				=   $this->input->post('lokasi_tanah');
            $fungsi_tanah				=   $this->input->post('fungsi_tanah');
            $tahun_pembelian			=   $this->input->post('tahun_pembelian');
            $nilai_pembelian			=   $this->input->post('nilai_pembelian');
            $njop_pembelian				=   $this->input->post('njop_pembelian');
            $njop_saat_ini				=   $this->input->post('njop_saat_ini');
            $nilai_tanah_sekarang		=   $this->input->post('nilai_tanah_sekarang');
            $nilai_pbb_sekarang			=   $this->input->post('nilai_pbb_sekarang');
            $id_sertifikat_tanah		=   $this->input->post('id_sertifikat_tanah');
            $no_sertifikat				=   $this->input->post('no_sertifikat');
        
            $data   			=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
											'kd_unit'=>$kd_unit,
											'nama_tanah'=>$nama_tanah,
											'luas_tanah'=>$luas_tanah,
											'lokasi_tanah'=>$lokasi_tanah,
											'fungsi_tanah'=>$fungsi_tanah,
											'tahun_pembelian'=>$tahun_pembelian,
											'nilai_pembelian'=>$nilai_pembelian,
											'njop_pembelian'=>$njop_pembelian,
											'njop_saat_ini'=>$njop_saat_ini,
											'nilai_tanah_sekarang'=>$nilai_tanah_sekarang,
											'nilai_pbb_sekarang'=>$nilai_pbb_sekarang,
											'id_sertifikat_tanah'=>$id_sertifikat_tanah,
											'no_sertifikat'=>$no_sertifikat,
											
											'post_time'=> date('Y-m-d'),
											'inputer'=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
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
            $nama_tanah 				=   $this->input->post('nama_tanah');
            $luas_tanah					=   $this->input->post('luas_tanah');
            $lokasi_tanah				=   $this->input->post('lokasi_tanah');
            $fungsi_tanah				=   $this->input->post('fungsi_tanah');
            $tahun_pembelian			=   $this->input->post('tahun_pembelian');
            $nilai_pembelian			=   $this->input->post('nilai_pembelian');
            $njop_pembelian				=   $this->input->post('njop_pembelian');
            $njop_saat_ini				=   $this->input->post('njop_saat_ini');
            $nilai_tanah_sekarang		=   $this->input->post('nilai_tanah_sekarang');
            $nilai_pbb_sekarang			=   $this->input->post('nilai_pbb_sekarang');
            $id_sertifikat_tanah	=   $this->input->post('id_sertifikat_tanah');
            $no_sertifikat				=   $this->input->post('no_sertifikat');
  
            $id 	 					= 	$this->input->post('id');
            $data   					=   array('tahun_bentuk_prodi'=>$tahun_bentuk_prodi,
											'nama_prodi'=>$nama_prodi,
											'status'=>$status,
											'post_time'=> date('Y-m-d'),
											'inputer'=> $this->session->userdata('nip') );
											
			
			$data   					=   array('nama_tanah'=>$nama_tanah,
											'luas_tanah'=>$luas_tanah,
											'lokasi_tanah'=>$lokasi_tanah,
											'fungsi_tanah'=>$fungsi_tanah,
											'tahun_pembelian'=>$tahun_pembelian,
											'nilai_pembelian'=>$nilai_pembelian,
											'njop_pembelian'=>$njop_pembelian,
											'njop_saat_ini'=>$njop_saat_ini,
											'nilai_tanah_sekarang'=>$nilai_tanah_sekarang,
											'nilai_pbb_sekarang'=>$nilai_pbb_sekarang,
											'id_sertifikat_tanah'=>$id_sertifikat_tanah,
											'no_sertifikat'=>$no_sertifikat,
											
											'post_time'=> date('Y-m-d'),
											'inputer'=> $this->session->userdata('nip') );
			
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect($this->uri->segment(1));
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
        redirect($this->uri->segment(1));
    }
	
}
