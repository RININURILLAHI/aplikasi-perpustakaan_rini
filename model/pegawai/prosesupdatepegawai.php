<?php
    include "../../config/koneksi.php";

    $id_petugas    = $_POST['id_pegawai'];
    $nama_petugas  = $_POST['nama_pegawai'];
    $jenis_kelam   = $_POST['jenis_kelamin'];
    $alamat        = $_POST['alamat'];
    $no_hp         = $_POST['no_hp'];
    $jabatan       = $_POST['jabatan'];

    $sql = "update  tabel_pegawai set
    (
        id_pegawai       = '".$id_pegawai."',
        nama_pegawai     = '".$nama_pegawai."',
        jenis_kelamin    = '".$jenis_kelamin."', 
        alamat           = '".$alamat."',
        no_hp            = '".$no_hp."',
        jabatan          = '".$jabatan."'

        where id_petugas = '".$id_petugas."'
        ";
    
    $db->query($sql);

    header('location: ../../beranda.php?page=pegawai');

    ?>