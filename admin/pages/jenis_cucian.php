<div class="breadcrumbs">
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Jenis Cucian</strong>
                            </div>
                            <div class="card-body">
                                <a href="index.php?p=tambah_jenis_cucian" class="btn btn-primary"><i class="fa fa-plus" style="color: white"></i> <font size="3" color="white"><u>Tambah Data</u></font></a></div><br>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
<?php
  include ("../config/koneksi.php");
  $sqll = "select * from jenis_cucian order by id_jenis_cucian desc";
  $resultt = mysql_query($sqll);
    if(mysql_num_rows($resultt) > 0){
?>                                            
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>No.</th>
                                            <th>Jenis Cucian</th>
                                            <th>Biaya</th>
                                            <th colspan="2" >Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
  $nomor=1;
  while($data = mysql_fetch_array($resultt)){
?>                                          
                                        <tr style="text-align: center">
                                            <td><?= $nomor++;?></td>
                                            <td><?= $data['jenis_cucian'];?></td>
                                            <td><?= $data['biaya'];?></td>
                                            
                                            <td align="center">
                                                <a href="index.php?p=edit_jenis_cucian&id_jenis_cucian=<?php echo $data['id_jenis_cucian']; ?>" class="btn btn-primary"> <i class="fa fa-fw fa-pencil" style="color: white"></i> <font color="white">Edit</font></a>
                                            </td>
                                            <td align="center">
                                                <a href="index.php?p=hapus_jenis_cucian&id_jenis_cucian=<?php echo $data['id_jenis_cucian']; ?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')" class="btn btn-danger mb-3"> <i class="fa fa-fw fa-trash" style="color: white"></i> <font color="white">Hapus</font></a>
                                            </td>
                                        </tr>
<?php
  }
?>
              </tbody>
            </table>
<?php
  }else{
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