<?php
include "../config/koneksi.php";
$id_type_kendaraan = $_GET['id_type_kendaraan'];
$hasil=mysql_query("delete from type_kendaraan where id_type_kendaraan='$id_type_kendaraan'");

if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='index.php?p=type_kendaraan'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Dihapus');
document.location='index.php?p=type_kendaraan'</script><?php }
?>