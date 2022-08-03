<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_kursus = $_POST['nama_kursus'];
$keterangan = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "UPDATE kursusan SET nama_kursus='$nama_kursus',keterangan='$keterangan',jadwal_mulai='$jadwal_mulai',jadwal_selesai='$jadwal_selesai' WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'kursusan.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'kursusan.php'
  </script>
<?php } ?>