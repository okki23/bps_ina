<?php
class workshop_tool extends CI_Controller{
    
    var $folder =   "admin/workshop_tool";
    var $tables =   "workshop_tool";
    var $pk     =   "id_workshop_tool";
    var $title  =   "Alat Workshop";
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
       if(isset($_POST['submit']))
        {
            $data['thn_beli'] =  $this->input->post('thn_beli');
        }
        else
        {
            $data['thn_beli']="";
        }
        $thn_beli 		=  $data['thn_beli'];
		
		
		$nip          		=  $this->session->userdata('nip');
		$UNITKERJA_SING     =  $this->session->userdata('UNITKERJA_SING');
		$kd_unit          	=  $this->session->userdata('kd_unit');
		
		$query  =  "SELECT * FROM workshop_tool
					WHERE thn_beli like '$thn_beli' ORDER BY id_workshop_tool
					";
	
        $data['record']=  $this->db->query($query)->result();
        $data['title']=  $this->title;
        $this->template->load('template', $this->folder.'/view',$data);   

    }
	
	function post()
    {
        if(isset($_POST['submit']))
        {
            $UNITKERJA_SING 		=   $this->input->post('UNITKERJA_SING');
            $kd_unit 				=   $this->input->post('kd_unit');
            $thn_beli 				=   $this->input->post('thn_beli');
            $nama_alat				=   $this->input->post('nama_alat');
            $sumber_alat			=   $this->input->post('sumber_alat');
            $lokasi_sumber_alat		=   $this->input->post('lokasi_sumber_alat');
            $bidang_lembaga_pembeli	=   $this->input->post('bidang_lembaga_pembeli');
            $nilai_alat				=   $this->input->post('nilai_alat');
            $lokasi_alat			=   $this->input->post('lokasi_alat');
            $status_alat			=   $this->input->post('status_alat');
            $keluhan_kondisi_alat	=   $this->input->post('keluhan_kondisi_alat');
          
            $data   				=   array('UNITKERJA_SING'=>$UNITKERJA_SING,
												'kd_unit'=>$kd_unit,
												'thn_beli'=>$thn_beli,
												'nama_alat'=>$nama_alat,
												'sumber_alat'=>$sumber_alat,
												'lokasi_sumber_alat'=>$lokasi_sumber_alat,
												'bidang_lembaga_pembeli'=>$bidang_lembaga_pembeli,
												'nilai_alat'=>$nilai_alat,
												'lokasi_alat'=>$lokasi_alat, 
												'status_alat'=>$status_alat, 
												'keluhan_kondisi_alat'=>$keluhan_kondisi_alat, 
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
           
            $this->db->insert($this->tables,$data);
			redirect('admin/workshop_tool');
        }
        else
        {
			//Status Barang
			$query = "SELECT keterangan FROM mst_status_barang";
			$data['record4']=  $this->db->query($query)->result_array();
			
            $data['title']=  $this->title;
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
	
    function edit()
    {
        if(isset($_POST['submit']))
        {
            $UNITKERJA_SING 		=   $this->input->post('UNITKERJA_SING');
            $kd_unit 				=   $this->input->post('kd_unit');
			$thn_beli 				=   $this->input->post('thn_beli');
            $nama_alat				=   $this->input->post('nama_alat');
            $sumber_alat			=   $this->input->post('sumber_alat');
            $lokasi_sumber_alat		=   $this->input->post('lokasi_sumber_alat');
            $bidang_lembaga_pembeli	=   $this->input->post('bidang_lembaga_pembeli');
            $nilai_alat				=   $this->input->post('nilai_alat');
            $lokasi_alat			=   $this->input->post('lokasi_alat');
            $status_alat			=   $this->input->post('status_alat');
            $keluhan_kondisi_alat	=   $this->input->post('keluhan_kondisi_alat');
  
            $id 	 				= 	$this->input->post('id');
            $data   				=   array(	'thn_beli'=>$thn_beli,
												'UNITKERJA_SING'=>$UNITKERJA_SING,
												'kd_unit'=>$kd_unit,
												'nama_alat'=>$nama_alat,
												'sumber_alat'=>$sumber_alat,
												'lokasi_sumber_alat'=>$lokasi_sumber_alat,
												'bidang_lembaga_pembeli'=>$bidang_lembaga_pembeli,
												'nilai_alat'=>$nilai_alat,
												'lokasi_alat'=>$lokasi_alat, 
												'status_alat'=>$status_alat, 
												'keluhan_kondisi_alat'=>$keluhan_kondisi_alat, 
												'post_time'=> date('Y-m-d'),
												'inputer'	=> $this->session->userdata('nip') );
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect('admin/workshop_tool');
        }
        else
        {
			//UNIT KERJA
			$query = "SELECT UNITKERJA_SING FROM users";
			$data['record3']=  $this->db->query($query)->result_array();
			
			//KODE UNIT
			$query = "SELECT UNITKERJA_SING,kd_unit FROM users";
			$data['record4']=  $this->db->query($query)->result_array();
			
			//Status Barang
			$query = "SELECT keterangan FROM mst_status_barang";
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
       redirect('admin/workshop_tool');
    }
	
	function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "alat_workshop.xls";
        $judul = "alat_workshop";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "SATKER");
		xlsWriteLabel($tablehead, $kolomhead++, "TAHUN");
		xlsWriteLabel($tablehead, $kolomhead++, "NAMA ALAT");
		
	
	$query  =  "SELECT * FROM workshop_tool ORDER BY id_workshop_tool ";
	$data['record']=  $this->db->query($query)->result();
	
	foreach ($record as $data)
             {
	
	//foreach ($this->Pegawai2_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->UNITKERJA_SING);
	    xlsWriteLabel($tablebody, $kolombody++, $data->thn_beli);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_alat);
	   
	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
	
}
