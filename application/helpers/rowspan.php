<?php
mysql_connect("localhost","root","") or die("gagal terkoneksi ke server ");
mysql_select_db("db_instansi") or die("gagal memilih database");

$query="SELECT * FROM kantor order by instansi";
$proses=mysql_query($query);
$i=0; 
while($data=mysql_fetch_assoc($proses)){
  $row[$i]=$data;
  $i++;
}
foreach($row as $cell){
  if(isset($total[$cell['instansi']]['jml'])) { 
    $total[$cell['instansi']]['jml']++; 
  }else{
    $total[$cell['instansi']]['jml']=1; 
  }	
}
echo "<table border=\"1\"> 
        <tr> 
            <th>Instansi</th> 
            <th>Kegiatan</th> 
            <th>Anggaran</th>  
        </tr>";
$n=count($row);
$cekinstansi="";
for($i=0;$i<$n;$i++){
  $cell=$row[$i];
  echo '<tr>';
  if($cekinstansi!=$cell['instansi']){
    echo '<td' .($total[$cell['instansi']]['jml']>1?' rowspan="' .($total[$cell['instansi']]['jml']).'">':'>') .$cell['instansi'].'</td>';
    $cekinstansi=$cell['instansi'];
  }
  echo "<td>$cell[kegiatan]</td><td>$cell[anggaran]</td>";
  echo "</tr>";
}
echo "</table>";
?>