<?php
    include "../../config/koneksi.php";
    
    $tanggal_transaksi  = $_POST['tanggal_transaksi'];
    $quantity           = $_POST['quantity'];
    $jenis_transaksi    = $_POST['jenis_transaksi'];

    $sql = "INSERT INTO tabel_transaksi
    (
        tanggal_transaksi,
        quantity,
        jenis_transaksi
    )
    VALUES
    (
        '".$tanggal_transaksi."',
        '".$quantity."',
        '".$jenis_transaksi."'
    )";

    $db->query($sql);

    header('location: ../..beranda.php?page=transaksi');

?>