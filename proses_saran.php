<?php 
require "config/koneksi.php"; 
  
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO saran 
        (
        nama, 
        pesan
        ) 
        VALUES (
        '$nama',
        '$pesan'
        )";

$hasil=mysql_query($sql);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Data Berhasil Ditambahkan');
document.location='index.php'</script>
<?php
}else{
?>
<script language="JavaScript">
alert('Data Gagal Ditambahkan');
document.location='index.php'</script><?php }
?>