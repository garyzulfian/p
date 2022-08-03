<?php include 'header_mahasiswa.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">List Kursus</h5>
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kursus</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Jadwal Mulai</th>
            <th scope="col">Jadwal Selesai</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $data = mysqli_query($koneksi, "SELECT * FROM daftar_kursus");
          foreach ($data as $row) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $row['nama_kursus'] ?></td>
              <td><?= $row['keterangan'] ?></td>
              <td><?= $row['jadwal_mulai'] ?></td>
              <td><?= $row['jadwal_selesai'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ./content -->
