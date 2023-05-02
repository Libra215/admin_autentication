<?php
session_start();
//error_reporting(1);
require_once('../database.php');
//require_once('../view/login.php');


if (isset($_POST['submit'])) {

  $nama     = $_POST['nama'];
  $nrp      = $_POST['nrp'];
  $alamat   = $_POST['alamat'];
  $ttl      = $_POST['ttl'];
  $email    = $_POST['email'];
  $nohp     = $_POST['nohp'];
  $username = $_POST['username'];
  $password = $_POST['password'];

    if (!$nam && !$nrp && !$alamat && !$ttl && !$email && !$nohp && !$username && !$password) {
        echo "<script>
        alert('Kolom Tidak Boleh Kosong');
        window.location.href='../view/register.php';
        </script>"; 
        exit();
    }

    $insert = mysqli_query($koneksi,"INSERT INTO data_mahasiswa (nama,nrp,alamat,ttl,email,nohp,username,password) values ('$nama', '$nrp', '$alamat', '$ttl', '$email', '$nohp', '$username', '$password')");
    if ($insert) {
     echo "<script>
     alert('Register Succes');
     </script>";
     header('location: login.php');
   }else {
     echo "<script>
     alert('Register Not Succes');
     </script>";
     exit();
   }
}

?>