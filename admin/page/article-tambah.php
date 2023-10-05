<?php 
  if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $insert = mysqli_query($koneksi, 
    "INSERT INTO artikel SET
      judul = '$judul',
      isi = '$isi'
    ");
    if($insert){
      // echo '<script>alert("Data Berhasil Ditambahkan")</script>';
      echo '<script>window.location="index.php?page=article"</script>';
    }
    else{
      echo '<script>alert("Data Gagal Ditambahkan")</script>';
      echo '<script>window.location="index.php?page=article"</script>';
    }

  }
?>

<div class="container">
  <h5>Halaman Tambah Artikel</h5>
  <div class="row">
  <a href="?page=article" class="btn btn-danger align-self-start m-2">Kembali</a>
    <div class="col-5 justify-content-center">
      <form action="" method="post">
        <input class="form-control" type="text" placeholder="Judul" id="judul" name="judul"><br>
        <textarea name="isi" cols="30" rows="10" placeholder="Isi"></textarea>z
        <button class="btn btn-success float-right" name="submit">Tambah!</button>
      </form>
    </div>
  </div>
</div>