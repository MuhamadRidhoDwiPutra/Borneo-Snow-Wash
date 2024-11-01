<?php
require "config/koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$type_kendaraan = $_POST['type_kendaraan'];
$plat_nomor = $_POST['plat_nomor'];

$sql = "INSERT INTO pendaftaran 
        (
        nama, 
        alamat,
        no_hp,
        type_kendaraan,
        plat_nomor
        ) 
        VALUES (
        '$nama',
        '$alamat',
        '$no_hp',
        '$type_kendaraan',
        '$plat_nomor'
        )";

$hasil = mysql_query($sql);

//see the result
if ($hasil) {
    ?>
    <script language="JavaScript">
        alert('Data Berhasil Ditambahkan');
        document.location = 'index.php'</script>
    <?php
} else {
    ?>
    <script language="JavaScript">
        alert('Data Gagal Ditambahkan');
        document.location = 'index.php'</script>
<?php }
?>