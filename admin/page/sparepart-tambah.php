<?php 
  if(isset($_POST['submit'])){
    $kode = $_POST['kode'];
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $insert = mysqli_query($koneksi, 
    "INSERT INTO onderdil SET
      kode = '$kode',
      kategori = '$kategori',
      nama = '$nama',
      deskripsi = '$deskripsi',
      harga = $harga,
      status = '$status'
    ");
    if($insert){
      // echo '<script>alert("Data Berhasil Ditambahkan")</script>';
      echo '<script>window.location="index.php?page=sparepart"</script>';
    }
    else{
      echo '<script>alert("Data Gagal Ditambahkan")</script>';
      echo '<script>window.location="index.php?page=sparepart"</script>';
    }

  }
?>

<div class="container">
  <h5>Halaman Tambah Onderdil</h5>
  <div class="row">
  <a href="?page=sparepart" class="btn btn-danger align-self-start m-2">Kembali</a>
    <div class="col-5 justify-content-center">
      <form action="" method="post">
          <input class="form-control" type="text" placeholder="Kode" id="kode" name="kode"><br>
          <input class="form-control" type="text" placeholder="Kategori" id="kategori" name="kategori"><br>
          <input class="form-control" type="text" placeholder="Nama" id="nama" name="nama"><br>
          <input class="form-control" type="text" placeholder="Deskripsi" id="deskripsi" name="deskripsi"><br>
          <input class="form-control" type="number" min="0" placeholder="Harga" id="harga" name="harga"><br>
        <select class="form-control" name="status">
          <option value="Y">Tersedia</option>
          <option value="N">Habis</option>
        </select><br>
        <button class="btn btn-success float-right" name="submit">Tambah!</button>
      </form>
    </div>
  </div>
</div>