<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM kursusan WHERE id = $id";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil dihapus!')
    location.href = 'kursusan.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal dihapus!')
    location.href = 'kursusan.php'
  </script>
<?php } ?>