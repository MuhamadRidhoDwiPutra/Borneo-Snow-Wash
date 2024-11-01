<?php
include ("../config/koneksi.php");
?>
<html>

<head>
    <title>Cetak</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <!-- <h2>Stock Bahan</h2>
        <h4>(Inventory)</h4> -->
        <div class="data-tables datatable-dark">

            <table id="mauexport" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <!-- <form method="POST" action="index.php?p=laporan_transaksi">
                    <div class="form-group">
                        <label for="nama">Cari Data:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form> -->
                <br>
                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama'])) {
                    $nama = $_POST['nama'];
                    $sql = "SELECT id_transaksi, nama, tanggal, total, status, nama_pencuci
                                            FROM transaksi WHERE nama = '$nama'";
                    $result = mysql_query($sql);

                    if (mysql_num_rows($result) > 0) {
                        ?>
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
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['total']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><?php echo $data['nama_pencuci']; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    } else {
                        echo 'Data not found!';
                        echo mysql_error();
                    }
                }
                ?>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>