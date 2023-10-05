<section id="article">
  <div class="container">
  <div class="text-center">
        <h2>
          Artikel
        </h2>
      </div>
    <div class="row d-flex justify-content-center">
      <div class="col-12 mb-5">


      <?php 
        $result = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id ASC");
        while ($row = mysqli_fetch_array($result)):
      ?>
        <div class="card m-3">
          <div class="card-body">
            <h5 class="card-title font-weight-bold"><?= $row['judul']; ?></h5>
            <p class="card-text"><?= $row['isi']; ?></p>
          </div>
        </div>

      <?php 
        endwhile
      ?>
        
        

      </div>
    </div>
  </div>
</section>