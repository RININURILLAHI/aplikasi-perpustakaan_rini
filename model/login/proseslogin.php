<?php
    session_start();
    include "../../config/koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];


     if( empty($usename) == true OR empty ($password) == true) {
         $errors [] = '* Username/password field is required';
     }
     else { 
         // if username exists 
         $sql ="SELECT * FROM tabel_user WHERE username = '$username'";
         $query = $db->query($sql);
         if( $query->num_rows > 0 ) {
             // check username and password 
             $password = $password;

             $sql ="SELECT * FROM tabel_user WHERE username = '$username'
             AND password = '$password'";
             $query  = $db->query($sql);
             $result = $query->fetch_array();

             $db->close();

             if($query->num_rows == 1) {
                 $_SESSION['logged_id'] = true;
                 $_SESSION['user_id']   = $result['id_user'];
                 $_SESSION['username']  = $result['username'];
                 $_SESSION['level']     = $result['level'];
                 header('location:../../beranda.php');
                 exit();
           }
             else {
                header('location: ../../index.php');
             }
       }
       else {
           header('location: ../../index.php'); 
       }
    }