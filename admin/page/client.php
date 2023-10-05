<?php 
  $token = round(((date("dHm") + 420 / 2)) * (substr(time(),5,3) + 5)/100);
?>
<div class="container">
  <h5>Halaman Testimoni</h5>
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card p-4">
        <h3 class="text-center font-weight-bold fs-2" title="Token untuk Testimoni">Token</h3>
        <p class="font-weight-light text-center">untuk mengisi form testimoni</p><br>
        <p class="text-center font-weight-bold bg-success text-white" style="font-size: 1.5rem;"><?= $token; ?></p>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Testimoni</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $nomor = 1;
            $result = mysqli_query($koneksi, "SELECT * FROM klien");
            while ($row = mysqli_fetch_array($result)):
          ?>
          <tr>
            <td><?= $nomor; ?></td>
            <td><img src="../images/testimonial/<?= $row['gambar'].'.'.$row['ekstensi'] ?>" alt="testimoni" width="50"></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['testimoni']; ?></td>
            <td>
              <a href="" class="btn btn-danger">Hapus</a>
            </td>
          </tr>

          <?php 
            $nomor++;
            endwhile
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>