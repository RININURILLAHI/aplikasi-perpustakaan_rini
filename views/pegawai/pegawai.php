<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA PEGAWAI 
         <a href="beranda.php?page=pegawai&aksi=add">
             <button class="btn btn-danger">Tambah Data</button>
        </a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id_pegawai</th>
                        <th>nama_pegawai</th>
                        <th>jenis_kelamin</th>
                        <th>alamat</th>
                        <th>no_hp</th>
                        <th>jabatan</th> 
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id_pegawai</th>
                        <th>nama_pegawai</th>
                        <th>jenis_kelamin</th>
                        <th>alamat</th>
                        <th>no_hp</th>
                        <th>jabatan</th> 
                        <th>Aksi</th>
                    </tr>
                </tfoot> 
                <tbody> 
                    <?php
                         $sql  = "select * from  tabel_pegawai";
                         $show = $db->query($sql);
 
                         foreach($show as $p):
                     ?>
                    <tr>
                        <td><?php echo $p['id_pegawai']?></td>
                        <td><?php echo $p['nama_pegawai']?></td>
                        <td><?php echo $p['jenis_kelamin']?></td>
                        <td><?php echo $p['alamat']?></td>
                        <td><?php echo $p['no_hp']?></td>
                        <td><?php echo $p['jabatan']?></td>
                        <td>
                        <a href="beranda.php?page=pegawai&aksi=edit$id=<?php echo $p['id_pegawai']?>"
                           class="btn btn-primary btn-circle">
                                <i class="fas fa-edit"></i>
                                </a>
                            <a href="model/pegawai/prosesdeletepegawai.php?id=<?php echo $p['id_pegawai']?>"
                            class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                                </a>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
