<!-- sparepart section -->

<section id="sparepart">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">
          Onderdil
        </h2>
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th class="text-center">#</th>
              <th>Kode</th>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th class="text-center">Status</th>
            </tr>
          </thead>
          <tbody class="table-hover">
            <?php 
            $result = mysqli_query($koneksi, "SELECT * FROM onderdil");
            $nomor = 1;
            while($row = mysqli_fetch_array($result)):
            ?>
            <tr>
              <td class="text-center"><?= $nomor; ?></td>
              <td><?= $row['kode']; ?></td>
              <td><?= $row['kategori']; ?></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['deskripsi']; ?></td>
              <td><?= $row['harga']; ?></td>
              <td class="text-center"><?= $row['status'] == "Y" ? "Ada" : "Habis" ?></td>
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
</section>