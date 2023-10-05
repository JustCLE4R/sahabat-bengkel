<!-- contact section -->
<?php 

if(isset($_POST['kirim'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $notel = $_POST['notel'];
  $pesan = $_POST['pesan'];

  $query = mysqli_query($koneksi, "INSERT INTO hubungi (nama, notel, email, pesan, created_at) VALUES ('$nama', '$notel', '$email', '$pesan', now())");
  if($query){
    echo "<script>alert('Pesan berhasil dikirim');</script>";
    echo "<script>window.location='index.php';</script>";
  }
  else{
    echo "<script>alert('Pesan gagal dikirim');</script>";
    echo "<script>window.location='index.php';</script>";
  }

}

?>
<section class="contact_section layout_padding" id="contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Hubungi Kami
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="" method="post">
            <div>
              <input type="text" placeholder="Nama" name="nama" class="form-control form-losef" required>
            </div>
            <div>
              <input type="text" placeholder="Nomor Telepon (628xx)" name="notel" class="form-control form-losef" value="628" required>
            </div>
            <div>
              <input type="email" placeholder="Surel" name="email" class="form-control form-losef" required>
            </div>
            <div>
              <input type="text" class="message-box form-control form-losef" name="pesan" placeholder="Pesan" required>
            </div>
            <div class="d-flex ">
              <button name="kirim">
                Kirim!
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->