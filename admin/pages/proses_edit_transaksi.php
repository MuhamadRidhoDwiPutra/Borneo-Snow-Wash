<?php
require "../config/koneksi.php";
$id_transaksi = $_POST['id_transaksi'];
$nama = $_POST['nama'];
$total = $_POST['total'];
$status = $_POST['status'];
$tanggal = $_POST['tanggal'];
$nama_pencuci = $_POST['nama_pencuci'];
$type_kendaraan = $_POST['type_kendaraan'];
$plat_nomor = $_POST['plat_nomor'];

$sql = "UPDATE transaksi SET nama = '$nama', total = '$total', status = '$status', tanggal = '$tanggal', nama_pencuci = '$nama_pencuci', type_kendaraan = '$type_kendaraan', plat_nomor = '$plat_nomor' WHERE id_transaksi = '$id_transaksi'";

$hasil = mysql_query($sql);

//see the result
if ($hasil) {
    ?>
    <script language="JavaScript">
        alert('Data Berhasil Diubah');
        document.location = 'index.php?p=transaksi'</script>
    <?php
} else {
    ?>
    <script language="JavaScript">
        alert('Data Gagal Diubah');
        document.location = 'index.php?p=edit_transaksi&id_transaksi=<?= $id_transaksi; ?>'</script>
<?php }
?>