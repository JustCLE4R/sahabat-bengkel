<?php 
if(isset($_POST['submit'])){
  $total = count($_FILES['gambar']['name']);

  for($i = 0; $i < $total; $i++){
    try {
      $file = $_FILES['gambar'];
      $fileName =  $file['name'][$i];
      $tmpName = $file['tmp_name'][$i];
      $ekstensiGambar = explode('.', $fileName);
    
      $ekstensiGambar = strtolower($ekstensiGambar[array_key_last($ekstensiGambar)]);
    
      $newFileName1 = uniqid();
      $newFileName2 = $newFileName1.'.'.$ekstensiGambar;
    
      move_uploaded_file($tmpName, '../images/gallery/'.$newFileName2);
    
      $insert = mysqli_query($koneksi, "INSERT INTO galeri SET 
        nama = '$newFileName1',
        ekstensi = '$ekstensiGambar'
      ");
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }
  }
  echo '<script>window.location="index.php?page=gallery"</script>';
}
?>

<div class="container">
  <h5>Halaman Tambah Galeri</h5>
  <div class="row">
    <a href="?page=gallery" class="btn btn-danger align-self-start m-2">Kembali</a>
    <div class="col-5 justify-content-center">
      <form action="" method="post" enctype="multipart/form-data">
        <input class="form-control-file" type="file" capture="user" accept=".png, .jpg, .jpeg" name="gambar[]" multiple required><br>
        <button class="btn btn-success float-right" name="submit">Tambah!</button>
      </form>
    </div>
  </div>
</div>