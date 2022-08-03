<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM data_mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil dihapus!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal dihapus!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php } ?>