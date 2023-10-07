<!-- Gallery -->

<section id="gallery">
  <h1 class="text-center mb-4">Galeri Bengkel</h1>
  <div class="container">
    <div class="row d-flex justify-content-center">

      <?php
        $result = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)):
          $url_gambar = "images/gallery/".$row['nama'];
      ?>

      <div class="col-9 col-lg-4 mb-4">
        <div class="test" style="background-image: url('<?= $url_gambar ?>'); background-repeat: no-repeat; height: 18rem; background-size: cover;"></div>
      </div>

      <?php endwhile ?>

    </div>
  </div>
</section>