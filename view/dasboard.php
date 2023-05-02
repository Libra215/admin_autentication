<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header("location: ../index.php");
    exit;
}

/* 
   kode di atas jika di baca 
   if = jika !isset($_SESSION['login]) artinya jika session login
   tidal valid maka akan di redirect ke ../index.php.
   yaitu halaman home awal
*/

/* 
   Dan jika valid maka akan menampilkan kode html di bawah
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Welcome <?php echo $_SESSION['username']; ?></title>
</head>
<body>
    <h1 class="container text-center mt-3">Welcome <?php echo $_SESSION['username'] ?></h1>
    <div class="container m-4">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">NRP</th>
      <th scope="col">Alamat</th>
      <th scope="col">TTL</th>
      <th scope="col">Email</th>
      <th scope="col">No Hp</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $_SESSION['id']; ?></th>
      <td><?php echo $_SESSION['nama']; ?></td>
      <td><?php echo $_SESSION['nrp']; ?></td>
      <td><?php echo $_SESSION['alamat']; ?></td>
      <td><?php echo $_SESSION['ttl']; ?></td>
      <td><?php echo $_SESSION['email']; ?></td>
      <td><?php echo $_SESSION['nohp']; ?></td>
      <td><?php echo $_SESSION['username']; ?></td>
      <td><?php echo $_SESSION['password']; ?></td>
    </tr>
  </tbody>
</table>
    <a class="btn btn-primary mt-4" href="logout.php">Logout</a>
</div>
</body>
</html>
