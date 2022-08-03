<?php
include 'koneksi.php';

$nama_kursus = $_POST['nama_kursus'];
$keterangan = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "INSERT INTO daftar_kursus(nama_kursus, keterangan, jadwal_mulai, jadwal_selesai)VALUES('$nama_kursus','$keterangan','$jadwal_mulai','$jadwal_selesai')";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Berhasil Daftar!')
    location.href = 'daftar_kursus.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'daftar_kursus.php'
  </script>
<?php } ?>