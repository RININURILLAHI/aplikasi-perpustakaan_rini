<?php
    include "../../config/koneksi.php";
    
    $id_user  = $_POST['id_user'];  
    $id_pegawai = $_POST['id_pegawai']; 
    $username  = $_POST['username'];  
    $password  = $_POST['password  '];
    $level     = $_POST['level'];
    $dibuatpada     = $_POST['dibuat pada']

    $sql = "INSERT INTO  tabel_user
    (
        id_user,
        id_pegawai
        username,
        password,
        level,
        dibuatpada
    )
    VALUES
    (
        '".$username."',
        '".$password."',
        '".$level."',
        '".$dibuatpada."'
    )";

    $db->query($sql);

    header('location: ../..beranda.php?page=user');

?>