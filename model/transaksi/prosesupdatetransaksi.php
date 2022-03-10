<?php
    include "../../config/koneksi.php";

    $tanggal_transaksi  = $_POST['tanggal_transaksi'];  
    $quantity           = $_POST['quantity  '];
    $jenis_transaksi    = $_POST['jenis_transaksi '];

    $sql = "UPDATE tabel_transaksi set
    (
        tanggal_transaksi    = '".$tanggal_transaksi ."',
        quantity             = '".$quantity ."',
        jenis_transaksi      = '".$jenis_transaksi ."', 

        where id_transaksi   = '".$id_transaksi."'
        ";
    
    $db->query($sql);

    header('location: ../../beranda.php?page=transaksi');

    ?>