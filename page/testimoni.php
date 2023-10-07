<?php 
if(isset($_POST['submit'])){
  $token = substr(round(((date("dHm") + 420 / 2)) * (substr(time(),5,3) + 1)),2,6);

  $nama = $_POST['nama'];
  $testimoni = $_POST['testimoni'];
  $tokenCompare = $_POST['token'];

  if($tokenCompare != $token){
    echo '<script>alert("Token Salah")</script>';
    echo '<script>window.location="index.php?page=client#client"</script>';
    exit();
  }

  // pict handling
  $file = $_FILES['gambar'];
  $fileName = $file['name'];
  $tmpName = $file['tmp_name'];

  $ekstensiGambar = explode('.', $fileName);
  $ekstensiGambar = strtolower($ekstensiGambar[array_key_last($ekstensiGambar)]);

  $newFileName = uniqid().'.'.$ekstensiGambar;

  move_uploaded_file($tmpName, 'images/testimonial/'.$newFileName);

  $insert = mysqli_query($koneksi, "INSERT INTO klien SET 
    nama = '$nama',
    testimoni = '$testimoni',
    gambar = '$newFileName'
  ");

  if($insert){
    // echo '<script>alert("Data Berhasil ditambah")</script>';
    echo '<script>window.location="index.php?page=client#client"</script>';
  }
  else{
    echo '<script>alert("Data Gagal ditambah")</script>';
    echo '<script>window.location="index.php?page=client#client"</script>';
  }

}
?>

<section id="testimoni">
  <h1 class="text-center">Berikan Testimoni Anda</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-3 col-md-6 p-sm-5 p-5 text-center">
        <form action="" method="post" enctype="multipart/form-data">
          <input class="form-control" type="text" name="nama" placeholder="Nama" required><br>
          <input class="form-control" type="text" name="testimoni" placeholder="Testimoni" required><br>
          <input class="form-control" type="text" name="token" placeholder="Token (Minta ke petugas)" required><br>
          <input class="form-control-file" type="file" capture="user" accept="image/*" name="gambar" required><br>
          <button class="btn btn-success text-center" name="submit">Kirim!</button>
        </form>
      </div>
    </div>
  </div>
</section>