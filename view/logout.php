<?php 

// Untuk logout atau penghapusan session pada web 
session_start();
session_unset();
session_destroy();

// end code 

// respnse jika succes 
echo "<script>
      alert('Succes Logout');
      window.location.href='login.php';
      </script>"; 
exit();
?>