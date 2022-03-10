<?php
    include '../../config/koneksi.php';
    
    $judul_buku     = $_POST['judul_buku'];
    $pengarang      = $_POST['pengarang'];
    $penerbit       = $_POST['penerbit'];
    $tahun_penerbit =$_POST['tahun_penerbit'];

    $sql = "INSERT INTO  tabel_buku
    (
        nama_buku,
        penulis,
        penerbit,
        tahun_penerbit
    )
    VALUES
    (
        '".$judul_buku."',
        '".$pengarang."',
        '".$penerbit."',
        '".$tahun_penerbit."

        where id_buku = '".$id_buku."'
    )";

    $db->query($sql);

    header('location: ../..beranda.php?page=buku');

?>