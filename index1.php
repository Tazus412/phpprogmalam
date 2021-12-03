<?php
session_start();
if( !isset($_SESSION['log']) ){
    header('location:index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
 
   
  </head>
  <body>
   <h1>Selamat datang <?php echo $_SESSION['username'];?></h1>
    <h4>Anda berhasil login ke dalam aplikasi</h4>

      <ul>
    
          <li><a href="view_anggota.php">Anggota</a>
          <li><a href="view_barang.php">Barang</a>
          <li><a href="view_kategori.php">Kategori</a>
          <li><a href="cuti.php">CUTI</a>
          <li><a href="logout.php" class="btn btn-info" onclick="return confirm('Yakin Ingin Logout?')">Logout</a></li>
      </ul>
</div>
 <section></section>

  </body>
</html>
