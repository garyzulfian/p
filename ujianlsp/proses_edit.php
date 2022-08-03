<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$kelas = $_POST['kelas'];

$query = "UPDATE data_mahasiswa SET nama='$nama',npm='$npm',kelas='$kelas' WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php } ?>