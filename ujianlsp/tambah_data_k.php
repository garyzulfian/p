<?php
include 'header_admin.php';

$nama_kursus = $_POST['nama_kursus'];
$keterangan = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "INSERT INTO kursusan(nama_kursus, keterangan, jadwal_mulai, jadwal_selesai)VALUES('$nama_kursus','$keterangan','$jadwal_mulai','$jadwal_selesai')";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil ditambahkan!')
    location.href = 'kursusan.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal ditambahkan!')
    location.href = 'kursusan.php'
  </script>
<?php } ?>