<?php include 'header_admin.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Ubah Data Mahasiswa</h5>
    <div class="card-body">
      <h5 class="card-title">Gas Edit Data Mahasiswa</h5>

      <?php
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE id = $id");
      foreach ($data as $row) : ?>

        <form action="proses_edit.php" method="POST">
          <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>">
          </div>
          <div class="form-group">
            <label for="">NPM</label>
            <input type="text" name="npm" class="form-control" value="<?= $row['npm'] ?>">
          </div>
          <div class="form-group">
            <label for="">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="<?= $row['kelas'] ?>">
          </div>
          <div class="form-group">
          <a href="data_mahasiswa.php" class="btn btn-danger ">Close</a>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<!-- ./content -->
<?php include 'footer.php'; ?>