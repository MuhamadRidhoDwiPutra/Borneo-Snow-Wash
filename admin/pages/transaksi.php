<div class="breadcrumbs">
</div>

<div class="content">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Data Transaksi</strong>
          </div>
          <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <div class="card-body">
                <a href="index.php?p=tambah_transaksi" class="btn btn-primary"><i class="fa fa-plus"
                    style="color: white"></i>
                  <font size="3" color="white"><u>Tambah Data</u></font>
                </a>
              </div><br>

              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <?php
                include("../config/koneksi.php");
                $sqll = "select * from transaksi ";
                $resultt = mysql_query($sqll);
                if (mysql_num_rows($resultt) > 0) {
                  ?>
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Penanggung Jawab Cuci</th>
                      <th>Type Kendaraan</th>
                      <th>Plat Nomor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $nomor = 1;
                    while ($data = mysql_fetch_array($resultt)) {
                      ?>
                      <tr align="center">
                        <td><?= $nomor++; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['tanggal']; ?></td>
                        <td><?= $data['total']; ?></td>
                        <td><?= $data['status']; ?></td>
                        <td><?= $data['nama_pencuci']; ?></td>
                        <td><?= $data['type_kendaraan']; ?></td>
                        <td><?= $data['plat_nomor']; ?></td>
                        <td align="center">
                          <a href="index.php?p=edit_transaksi&id_transaksi=<?php echo $data['id_transaksi']; ?>"
                            class="btn btn-primary"> <i class="fa fa-fw fa-pencil" style="color: white"></i>
                            <font color="white">Edit</font>
                          </a>
                        </td>
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