<?php 
  if(isset($_GET['action'])){
    if($_GET['action'] == 'hapus'){
      $id = $_GET['id'];

      $delete = mysqli_query($koneksi, "DELETE FROM onderdil WHERE id = $id");
      if($delete){
        // echo '<script>alert("Data Berhasil dihapus")</script>';
        echo '<script>window.location="index.php?page=sparepart"</script>';
      }
      else{
        echo '<script>alert("Data Gagal dihapus")</script>';
        echo '<script>window.location="index.php?page=sparepart"</script>';
      }
    }
  }
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h5>Halaman Onderdil</h5>
      <a href="?page=sparepart-tambah" class="btn btn-success m-2">Tambah</a>
      <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th class="text-center">#</th>
            <th>Kode</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Status</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $nomor = 1;
          $result = mysqli_query($koneksi, "SELECT * FROM onderdil ORDER BY status DESC");
          while ($row = mysqli_fetch_assoc($result)):
        ?>
          <tr>
            <td class="text-center"><?= $nomor; ?></td>
            <td><?= $row['kode']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            <td class="text-center"><?= number_format($row['harga'],0,',','.'); ?></td>
            <td class="text-center"><?= $row['status'] == "Y" ? "Tersedia" : "Habis" ?></td>
            <td class="text-center">
              <a href="?page=sparepart-edit&id=<?= $row['id'] ?>" class="btn btn-warning">Ubah</a>
              <a href="?page=sparepart&action=hapus&id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
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