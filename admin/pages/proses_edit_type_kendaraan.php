<?php 
require "../config/koneksi.php"; 
  
$id_type_kendaraan=$_POST['id_type_kendaraan'];
$type_kendaraan=$_POST['type_kendaraan'];

$sql2 = "UPDATE type_kendaraan SET type_kendaraan = '$type_kendaraan' WHERE id_type_kendaraan = '$id_type_kendaraan'";

$hasil2=mysql_query($sql2);

//see the result
if ($hasil2) {
?>
<script language="JavaScript">
alert('Data Berhasil Diubah');
document.location='index.php?p=type_kendaraan'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Diubah');
document.location='index.php?p=edit_type_kendaraan&id_type_kendaraan=<?= $id_type_kendaraan;?>'</script><?php }
?>