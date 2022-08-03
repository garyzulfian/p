<?php
include 'header_admin.php';

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO data_mahasiswa(nama, npm, kelas)VALUES('$nama','$npm','$kelas')";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil ditambahkan!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal ditambahkan!')
    location.href = 'data_mahasiswa.php'
  </script>
<?php } ?>