<?php 
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $insert = mysqli_query($koneksi, 
    "UPDATE onderdil SET
      kode = '$kode',
      kategori = '$kategori',
      nama = '$nama',
      deskripsi = '$deskripsi',
      harga = $harga,
      status = '$status'
      WHERE id = $id
    ");
    if($insert){
      // echo '<script>alert("Data Berhasil Diedit")</script>';
      echo '<script>window.location="index.php?page=sparepart"</script>';
    }
    else{
      echo '<script>alert("Data Gagal Diedit")</script>';
      echo '<script>window.location="index.php?page=sparepart"</script>';
    }

  }
?>

<div class="container">
  <h5>Halaman Edit Onderdil</h5>
  <div class="row">
    <a href="?page=sparepart" class="btn btn-danger align-self-start m-2">Kembali</a>
    <div class="col-5 justify-content-center">
      <form action="" method="post">
        <?php
          $id = $_GET['id'];
          $result = mysqli_query($koneksi, "SELECT * FROM onderdil WHERE id = $id");
          while ($row = mysqli_fetch_array($result)):
        ?>
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <input class="form-control" type="text" placeholder="Kode" id="kode" name="kode" readonly value="<?= $row['kode'] ?>"><br>
          <input class="form-control" type="text" placeholder="Kategori" id="kategori" name="kategori" value="<?= $row['kategori'] ?>"><br>
          <input class="form-control" type="text" placeholder="Nama" id="nama" name="nama" value="<?= $row['nama'] ?>"><br>
          <input class="form-control" type="text" placeholder="Deskripsi" id="deskripsi" name="deskripsi" value="<?= $row['deskripsi'] ?>"><br>
          <input class="form-control" type="number" min="0" placeholder="Harga" id="harga" name="harga" value="<?= $row['harga'] ?>"><br>
        <select class="form-control" name="status">
          <option value="Y">Tersedia</option>
          <option value="N" <?= $row['status'] == 'N' ? 'selected' : '' ?> >Habis</option>
        </select><br>
        <button class="btn btn-success float-right" name="submit">Ubah!</button>
        <?php 
          endwhile
        ?>
      </form>
    </div>
  </div>
</div>