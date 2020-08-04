<?php
class m_grafik extends CI_Model{

	function get_data_stok(){
		
		 if(isset($_POST['submit']))
        {
            $data['nama'] =  $this->input->post('nama');
                   }
        else
        {
            $data['nama']="";
                   }
            $nama =  $data['nama'];
			
			$query = $this->db->query("SELECT A.nip, A.penyelenggara, A.tgl_assesment, A.tujuan, A.jenis, A.nilai_total, A.nilai_prestasi, 
							A.nilai_support, A.nilai_teknis, A.nilai_litbang, A.nilai_rata, A.rekomendasi,
							T.NIP, T.nipbaru, T.status, T.NAMA, T.UNITKERJA, T.kd_unit
							
                FROM assesment as A,t_rekap_master as T 
                WHERE A.nip=T.NIP  AND 
				T.kd_unit like '$nama%'
				ORDER BY A.nilai_total DESC");
         
		 
		
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}

