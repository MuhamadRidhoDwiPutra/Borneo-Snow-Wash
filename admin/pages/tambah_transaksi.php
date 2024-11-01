<div class="breadcrumbs">
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tambah Data Transaksi</strong>
                    </div>
                    <div class="card-body">

                        <form action="index.php?p=proses_tambah_transaksi" method="post" enctype="multipart/form-data"
                            class="form-horizontal">

                            <div class="form-group row">
                                <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" id="nama" name="nama" class="form-control" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total" class="col-md-3 col-form-label">Total</label>
                                <div class="col-md-9">
                                    <input type="text" id="total" name="total" class="form-control" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-9">
                                    <select id="status" name="status" class="form-control" required="">
                                        <option value="lunas">Lunas</option>
                                        <option value="batal">Belum Lunas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-3 col-form-label">Tanggal</label>
                                <div class="col-md-9">
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required=""
                                        value="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_pencuci" class="col-md-3 col-form-label">Penanggung Jawab Cuci</label>
                                <div class="col-md-9">
                                    <input type="text" id="nama_pencuci" name="nama_pencuci" class="form-control"
                                        required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type_kendaraan" class="col-md-3 col-form-label">Type Kendaraan</label>
                                <div class="col-md-9">
                                    <input type="text" id="type_kendaraan" name="type_kendaraan" class="form-control"
                                        required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plat_nomor" class="col-md-3 col-form-label">Plat Nomor</label>
                                <div class="col-md-9">
                                    <input type="text" id="plat_nomor" name="plat_nomor" class="form-control"
                                        required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->