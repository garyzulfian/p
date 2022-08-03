<?php include 'header_admin.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<div class="card im-box">
  <h5 class="card-header">Selamat Datang</h5>
  <div class="card-body">
    <h5 class="card-title">Kursus</h5>
    <p class="card-text">Halo Yang Mulia <b><?php echo $_SESSION['username']; ?></b> 
	Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="data_mahasiswa.php" class="btn btn-primary">Data Mahasiswa</a>
    <a href="kursusan.php" class="btn btn-primary">Kursusan</a>
  </div>
  <?php include 'footer.php'; ?>
</div>
</body>
</html> 
