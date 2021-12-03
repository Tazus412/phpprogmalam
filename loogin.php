<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-password">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="lougout.php" class="btn">Logout</a>
            </div>
			
			<div class="kolom">
				<div>
					<?php echo "Hai, selamat datang <b>".$_SESSION['username']."</b>";
					?>
				<ul>
					<li><a href="view_anggota.php">Anggota</a></li>
					<li><a href="view_barang.php">Barang</a></li>
					<li><a href="view_kategori.php">Kategori</a></li>
				</ul>
				 
				<br/>
				<a href="logout.php" onclick="return confirm('Yakin keluar?')">Keluar</a>	
			</div>
        </form>
    </div>
</body>
</html>
