<?php 
  if(isset($_GET['action'])){
    if($_GET['action'] == 'hapus'){
      $id = $_GET['id'];

      $delete = mysqli_query($koneksi, "DELETE FROM artikel WHERE id = $id");
      if($delete){
        // echo '<script>alert("Data Berhasil dihapus")</script>';
        echo '<script>window.location="index.php?page=article"</script>';
      }
      else{
        echo '<script>alert("Data Gagal dihapus")</script>';
        echo '<script>window.location="index.php?page=article"</script>';
      }
    }
  }
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h5>Halaman Artikel</h5>
      <a href="?page=article-tambah" class="btn btn-success m-2">Tambah</a>
      <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th class="text-center">#</th>
            <th>Judul</th>  
            <th>Isi</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $nomor = 1;
          $result = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id DESC");
          while ($row = mysqli_fetch_assoc($result)):
        ?>
          <tr>
            <td class="text-center"><?= $nomor; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['isi']; ?></td>
            <td class="text-center">
              <a href="?page=article-edit&id=<?= $row['id'] ?>" class="btn btn-warning">Ubah</a>
              <a href="?page=article&action=hapus&id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php
            $nomor++;
            endwhile
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>