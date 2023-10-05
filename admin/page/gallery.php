<?php 
  if(isset($_GET['action'])){
    if($_GET['action'] == 'hapus'){
      $id = $_GET['id'];
      $nama = $_GET['nama'];
      $ekstensi = $_GET['ekstensi'];

      unlink("../images/gallery/$nama.$ekstensi");

      $delete = mysqli_query($koneksi, "DELETE FROM galeri WHERE id = $id");
      if($delete){
        // echo '<script>alert("Data Berhasil dihapus")</script>';
        echo '<script>window.location="index.php?page=gallery"</script>';
      }
      else{
        echo '<script>alert("Data Gagal dihapus")</script>';
        echo '<script>window.location="index.php?page=gallery"</script>';
      }
    }
  }
?>

<div class="container">
  <h5>Halaman Galeri</h5>
  <a class="btn btn-success m-2 align-self-start" href="?page=gallery-tambah">Tambah</a>
  <div class="row justify-content-center">
    <?php 
      $result = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id DESC");
      while($row = mysqli_fetch_assoc($result)):
    ?>
      <div class="col-sm-2">
        <div class="card text-center mb-4" style="height: 18rem;">
          <img src="../images/gallery/<?= $row['nama'].'.'.$row['ekstensi'] ?>" alt="" class="card-img-top" style="height: 13rem;">
          <div class="card-body">
            <a href="?page=gallery&action=hapus&id=<?= $row['id'].'&nama='.$row['nama'].'&ekstensi='.$row['ekstensi'] ?>"class="btn btn-danger" onclick="return confirm('Yakin ingin mengahpus gambar?')">Hapus</a>
          </div>
        </div>
      </div>
    <?php 
      endwhile
    ?>
  </div>
</div>