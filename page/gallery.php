<!-- Gallery -->

<section id="gallery">
  <h1 class="text-center mb-4">Galeri Bengkel</h1>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <?php
        $result = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($result)):
      ?>
        <img class="col-6 col-md-3 mb-3" src="images/gallery/<?= $row['nama'].'.'.$row['ekstensi'] ?>" alt="gallery">
      <?php endwhile ?>

    </div>
  </div>
</section>