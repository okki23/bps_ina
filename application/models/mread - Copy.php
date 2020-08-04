<?php
class Mread extends CI_Model{
    function report()
	{
        
		$query = $this->db->query("SELECT S.id_simpulan_ketua, S.ID, C.ID, C.start, COUNT(id_simpulan_ketua) as total
					FROM simpulan_ketua as S, calendar_events as C
					 WHERE S.ID=C.ID  AND C.jenis='1' Group by YEAR(C.start)");
	
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}