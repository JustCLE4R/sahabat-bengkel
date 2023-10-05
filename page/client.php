<!-- client section -->

<section class="client_section mb-5" id="client">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Apa yang klien kami katakan
        </h2>
        <a href="?page=testimoni#testimoni" class="btn btn-link">Berikan Testimoni Anda</a>
      </div>
      <div class="carousel-wrap layout_padding2-top ">
        <div class="owl-carousel">
          <?php 
          $result = mysqli_query($koneksi, "SELECT * FROM klien");
          $nomor = 1;
          while($row = mysqli_fetch_array($result)):
          ?>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="images/testimonial/<?= $row['gambar'].'.'.$row['ekstensi'] ?>" alt="" height="120">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      <?= $row['nama']; ?>
                    </h6>
                    <hr>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  <?= $row['testimoni']; ?>
                </p>
              </div>
            </div>
          </div>
          <?php 
          endwhile
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->