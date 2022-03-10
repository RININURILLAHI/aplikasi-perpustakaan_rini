<?php
    include "../../config/koneksi.php";
    
    $id_buku         = $_POTS['nama_buku'];
    $pengarang       = $_POST['penulis'];
    $penerbit        =$_POST['penerbit'];
    $tahun_penerbit  =$_POST['tahun_penerbit'];
    
    $sql = "update tabel_buku set
            id_buku         = '".$nama_buku."',
            pengarang       = '".$penulis."',
            penerbit        = '".$penerbit."',
            tahun_penerbit  ='".$tahun_penerbit."',

            where id_buku   = '".$nama_buku."'
            ";

    $db->query($sql);

    header('location: ../../beranda.php?page=buku');
?>