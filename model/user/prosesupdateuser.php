<?php
    include "../../config/koneksi.php";

    $id_user    = $_POST['id_user'];  
    $id_pegawai = $_POST['id_pegawai']; 
    $username   = $_POST['username'];  
    $password   = $_POST['password  '];
    $level      = $_POST['level'];
    $dibuatpada     = $_POST['dibuat pada'];

    $sql = "UPDATE  tabel_user set
    (
        
        id_pegawai  = '".$id_pegawai."',
        username    = '".$username ."',
        password    = '".$password ."',
        level       = '".$level ."', 
        dibuatpada  = '".$dibuatpada."'

        where id_transaksi = '".$id_user."'
        ";
    
    $db->query($sql);

    header('location: ../../beranda.php?page=user');

    ?>