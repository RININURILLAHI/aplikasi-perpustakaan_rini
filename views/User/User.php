<div class="container-fluid">
<div class="card shadow mb-4"> 
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA USER</h6>
        <a href="beranda.php?page=user&aksi=add">
             <button class="btn btn-danger">Tambah Data </button>
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>nama pegawai</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>dibuatpada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>nama pegawai</th>
                        <th>username</th>
                        <th>password</th>
                        <th>level</th>
                        <th>dibuatpada</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot> 
                <tbody>
                <?php
                         $sql  = "select u.*,p.nama_pegawai from tabel_user u left join tabel_pegawai p on u.id_pegawai = p.id_pegawai";
                         $show = $db->query($sql);
 
                         foreach($show as $u):
                     ?>
                    <tr>
                    
                        <td><?php echo $u['nama_pegawai']?></td> 
                        <td><?php echo $u['username']?></td>
                        <td><?php echo $u['password']?></td>
                        <td><?php echo $u['level']?></td>
                        <td><?php echo $u['dibuat pada']?></td>
                        <td>
                        <a href="beranda.php?page=user&aksi=edit$id=<?php echo $u['id_user']?>"
                           class="btn btn-primary btn-circle">
                                <i class="fas fa-edit"></i>
                                </a>
                            <a href="model/anggota/prosesdeleteuser.php?id=<?php echo $u['id_user']?>"
                            class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                                </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
    </div>
</div>

</div> 
