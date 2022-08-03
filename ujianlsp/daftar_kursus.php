<?php include 'header_mahasiswa.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Daftar Kursus</h5>
    <div class="card-body">
      <h5 class="card-title">Lihat Kursus</h5>
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
                <a class="badge badge-success" href="form_daftar_kursus.php?id=<?= $row['id'] ?>">Daftar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ./content -->
