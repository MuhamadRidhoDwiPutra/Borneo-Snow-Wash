<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Riwayat Cucian</title>
</head>

<body>
    <div class="breadcrumbs">
    </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Riwayat Cucian</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <?php
                                include ("../config/koneksi.php");
                                $sqll = "select * from pendaftaran order by id_pendaftaran desc";
                                $resultt = mysql_query($sqll);
                                if (mysql_num_rows($resultt) > 0) {
                                    ?>
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.Hp</th>
                                            <th>Type Kendaraan</th>
                                            <th>Plat Nomor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        while ($data = mysql_fetch_array($resultt)) {
                                            ?>
                                            <tr style="text-align: center">
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $data['nama']; ?></td>
                                                <td><?= $data['alamat']; ?></td>
                                                <td><?= $data['no_hp']; ?></td>
                                                <td><?= $data['type_kendaraan']; ?></td>
                                                <td><?= $data['plat_nomor']; ?></td>

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
                                ?>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</body>

</html>