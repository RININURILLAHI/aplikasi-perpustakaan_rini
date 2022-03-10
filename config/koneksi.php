<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan_RINI";

$db = mysqli_connect($host,$user,$pass,$db);

if (!$db){
    die("data tidak terhubung");
}
