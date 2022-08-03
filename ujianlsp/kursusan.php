<?php include 'header_admin.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Kursusan</h5>
    <div class="card-body">
      <h5 class="card-title">Lihat Kursus</h5>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
        Tambah Kursus
      </button>
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kursus</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Jadwal Mulai</th>
            <th scope="col">Jadwal Selesai</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $data = mysqli_query($koneksi, "SELECT * FROM kursusan");
          foreach ($data as $row) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $row['nama_kursus'] ?></td>
              <td><?= $row['keterangan'] ?></td>
              <td><?= $row['jadwal_mulai'] ?></td>
              <td><?= $row['jadwal_selesai'] ?></td>
              <td>
                <a class="badge badge-success" href="edit_data_k.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="badge badge-danger" href="hapus_data_k.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Kursus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="tambah_data_k.php" method="POST">
          <div class="form-group">
            <label for="">Nama Kursus</label>
            <input type="text" name="nama_kursus" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jadwal Mulia</label>
            <input type="date" name="jadwal_mulai" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Jadwal Selesai</label>
            <input type="date" name="jadwal_selesai" class="form-control">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-danger " data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ./Modal add -->


<?php include 'footer.php'; ?>