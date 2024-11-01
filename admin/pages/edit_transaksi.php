<?php
include ("../config/koneksi.php");
$id_transaksi = $_GET['id_transaksi']; // get the id which will be updated

$queryy = mysql_query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'"); // get the data that will be updated
$dt = mysql_fetch_array($queryy);
?>

<div class="breadcrumbs">
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Edit Data Transaksi</strong>
                    </div>
                    <div class="card-body">

                        <form action="index.php?p=proses_edit_transaksi" method="post" enctype="multipart/form-data"
                            class="form-horizontal">
                            <input type="hidden" id="text-input" name="id_transaksi" value="<?= $dt['id_transaksi']; ?>"
                                class="form-control" required="">

                            <div class="form-group row">
                                <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" id="nama" name="nama" class="form-control" required=""
                                        value="<?= $dt['nama']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total" class="col-md-3 col-form-label">Total</label>
                                <div class="col-md-9">
                                    <input type="text" id="total" name="total" class="form-control" required=""
                                        value="<?= $dt['total']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9">
                                    <input type="text" id="status" name="status" class="form-control" required=""
                                        value="<?= $dt['status']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-3 col-form-label">Tanggal</label>
                                <div class="col-md-9">
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required=""
                                        value="<?= $dt['tanggal']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_pencuci" class="col-md-3 col-form-label">Penanggung Jawab Cuci</label>
                                <div class="col-md-9">
                                    <input type="text" id="nama_pencuci" name="nama_pencuci" class="form-control"
                                        required="" value="<?= $dt['nama_pencuci']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type_kendaraan" class="col-md-3 col-form-label">Type Kendaraan</label>
                                <div class="col-md-9">
                                    <input type="text" id="type_kendaraan" name="type_kendaraan" class="form-control"
                                        required="" value="<?= $dt['type_kendaraan']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plat_nomor" class="col-md-3 col-form-label">Plat Nomor</label>
                                <div class="col-md-9">
                                    <input type="text" id="plat_nomor" name="plat_nomor" class="form-control"
                                        required="" value="<?= $dt['plat_nomor']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->