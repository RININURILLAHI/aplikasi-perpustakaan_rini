<?php
    include "../../config/koneksi.php";
    
    $id=$_GET['id'];

    $sql = "DELETE from tabel_anggota where id_angggota = $id";
    $db->query($sql);

    header('location: ../../beranda.php?page=anggota');
?>