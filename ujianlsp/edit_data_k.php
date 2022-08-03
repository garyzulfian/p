<?php include 'header_admin.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Ubah Kursus</h5>
    <div class="card-body">
      <h5 class="card-title">Gas Edit Kursus</h5>

      <?php
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "SELECT * FROM kursusan WHERE id = $id");
      foreach ($data as $row) : ?>

        <form action="proses_edit_k.php" method="POST">
          <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
          <div class="form-group">
            <label for="">Nama Kursus</label>
            <input type="text" name="nama_kursus" class="form-control" value="<?= $row['nama_kursus'] ?>">
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $row['keterangan'] ?>">
          </div>
          <div class="form-group">
            <label for="">Jadwal Mulai</label>
            <input type="text" name="jadwal_mulai" class="form-control" value="<?= $row['jadwal_mulai'] ?>">
          </div>
          <div class="form-group">
            <label for="">Jadwal Selesai</label>
            <input type="text" name="jadwal_selesai" class="form-control" value="<?= $row['jadwal_selesai'] ?>">
          </div>
          <div class="form-group">
          <a href="kursusan.php" class="btn btn-danger ">Close</a>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<!-- ./content -->
<?php include 'footer.php'; ?>