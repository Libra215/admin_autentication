<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "koneksi";


$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ($koneksi == false) die('Koneksi gagal konek');