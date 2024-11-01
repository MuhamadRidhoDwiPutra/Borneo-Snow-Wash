<?php 
require "../config/koneksi.php"; 
  
$type_kendaraan=$_POST['type_kendaraan'];

 $sql = "INSERT INTO type_kendaraan  
           ( 
        id_type_kendaraan, 
			  type_kendaraan
           ) 
 
           VALUES  
           (  
        NULL,
			  '$type_kendaraan'
            )"; 

$hasil=mysql_query($sql);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Ditambahkan');
document.location='index.php?p=type_kendaraan'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Ditambahkan');
document.location='index.php?p=tambah_type_kendaraan'</script><?php }
?>