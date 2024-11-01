<div class="breadcrumbs">
</div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Laporan Transaksi</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <form method="POST" action="index.php?p=laporan_transaksi">
                                <div class="form-group">
                                    <label for="nama">Cari Data:</label>
                                    <select class="form-control" id="nama" name="nama" required>
                                        <option value="">Pilih Nama</option>
                                        <?php
                                        // Fetch distinct 'nama' values from the database to populate the dropdown
                                        include ("../config/koneksi.php");
                                        $query = "SELECT DISTINCT nama FROM transaksi";
                                        $result = mysql_query($query);
                                        while ($row = mysql_fetch_assoc($result)) {
                                            echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
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
                                <?php
                                } else {
                                    echo 'Data not found!';
                                    echo mysql_error();
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
</div>
<!-- Include Bootstrap JS -->