<?php
require "../config/koneksi.php";

$nama = $_POST['nama'];
$total = $_POST['total'];
$status = $_POST['status'];
$tanggal = $_POST['tanggal'];
$nama_pencuci = $_POST['nama_pencuci'];
$type_kendaraan = $_POST['type_kendaraan'];
$plat_nomor = $_POST['plat_nomor'];

$sql = "INSERT INTO transaksi  
           (id_transaksi,nama,total,status,tanggal,nama_pencuci,type_kendaraan,plat_nomor) 
 
           VALUES  
           (  
        NULL,
			'$nama', 
			'$total',
            '$status',
            '$tanggal', 
			'$nama_pencuci',
            '$type_kendaraan',
            '$plat_nomor'
            )";

$hasil = mysql_query($sql);

//see the result
if ($hasil) {
    ?>
    <script language="JavaScript">
        alert('Data Berhasil Ditambahkan');
        document.location = 'index.php?p=transaksi'</script>
    <?php
} else {
    ?>
    <script language="JavaScript">
        alert('Data Gagal Ditambahkan');
        document.location = 'index.php?p=tambah_transaksi'</script>
<?php }
?>