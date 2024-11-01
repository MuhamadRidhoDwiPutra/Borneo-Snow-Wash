<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Laporan Transaksi</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css">
    <!-- Include other CSS files as needed -->
</head>

<body>
    <div class="breadcrumbs">
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Hasil Pencarian Laporan Transaksi</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <?php
                                include ("../config/koneksi.php");

                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama'])) {
                                    $nama = $_POST['nama'];
                                    $sql = "SELECT id_transaksi, nama, tanggal, total, status, nama_pencuci
                                        FROM transaksi WHERE nama = '$nama'";
                                    $result = mysql_query($sql);

                                    if (mysql_num_rows($result) > 0) {
                                        ?>
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Nama Pencuci</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomor = 1;
                                                while ($data = mysql_fetch_array($result)) {
                                                    ?>
                                                    <tr style="text-align: center">
                                                        <td><?= $nomor++; ?></td>
                                                        <td><?= $data['nama']; ?></td>
                                                        <td><?= $data['tanggal']; ?></td>
                                                        <td><?= $data['total']; ?></td>
                                                        <td><?= $data['status']; ?></td>
                                                        <td><?= $data['nama_pencuci']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <form method="post" action="index.php?p=export">
                                            <input type="hidden" name="nama" value="<?= $nama; ?>">
                                            <button type="submit" class="btn btn-primary">Cetak PDF</button>
                                        </form>
                                        <?php
                                    } else {
                                        echo 'Data not found!';
                                        echo mysql_error();
                                    }
                                } else {
                                    echo 'Data yang diinputkan salah!';
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</body>

</html>