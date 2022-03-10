<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA BUKU
         <a href="beranda.php?page=buku&aksi=add">
             <button class="btn btn-danger">Tambah Data</button>
        </a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul_Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun_terbit</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Judul_buku</th>
                        <th>pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun_terbit</th>
                         <th>Aksi</th>  
                    </tr>
                </tfoot> 
                <tbody>
                    <?php
                         $sql  = "select * from tabel_buku";
                         $show = $db->query($sql);
 
                         foreach($show as $buku):
                    ?>
                    <tr>
                        <td><?php echo $buku['nama_buku']?></td>
                        <td><?php echo $buku['penulis']?></td>
                        <td><?php echo $buku['penerbit']?></td>
                        <td><?php echo $buku['tahun_terbit']?></td>
                        <td>
                        <a href="beranda.php?page=buku&aksi=edit$id=<?php echo $buku['id_buku']?>"
                           class="btn btn-primary btn-circle">
                                <i class="fas fa-edit"></i>
                                </a>
                            <a href="model/buku/prosesdeletebuku.php?id=<?php echo $buku['id_buku']?>"
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

</div