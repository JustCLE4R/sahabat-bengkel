<?php 
  if(isset($_GET['action'])){
    if($_GET['action'] == 'hapus'){

      $id = $_GET['id'];

      $delete = mysqli_query($koneksi, "DELETE FROM hubungi WHERE id = $id");
      if($delete){
        // echo '<script>alert("Data Berhasil dihapus")</script>';
        echo '<script>window.location="index.php?page=contact"</script>';
      }
      else{
        echo '<script>alert("Data Gagal dihapus")</script>';
        echo '<script>window.location="index.php?page=contact"</script>';
      }
    }
  }
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h5>Halaman Hubungi</h5>
      <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th class="text-center">#</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Pesan</th>
            <th class="text-center">Waktu Dikirim</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $nomor = 1;
          $result = mysqli_query($koneksi, "SELECT * FROM hubungi ORDER BY created_at");
          if($result->num_rows == 0){
            echo "<tr><td colspan='7' class='text-center'>Belum ada Data!</td></tr>";
          }
          while ($row = mysqli_fetch_assoc($result)):
        ?>


          <tr>
            <td class="text-center"><?= $nomor; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['notel']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['pesan']; ?></td>
            <td class="text-center"><?= $row['created_at']; ?></td>
            <td class="text-center">
              <?php 
                $text = "Halo, Kami dari Sahabat Bengkel, perihal pertanyaan yang kamu ajukan yaitu:%0A%22".$row['pesan']."%22%0A";
              ?>
              <a href="https://api.whatsapp.com/send/?phone=<?= $row['notel'] ?>&text=<?= $text ?>" class="btn btn-success mb-1" target="_blank">Hubungi</a>
              <a href="?page=contact&action=hapus&id=<?= $row['id'] ?>" class="btn btn-danger mb-1" onclick="return confirm('Yakin ingin menghapus data?')">&nbsp;&nbsp;Hapus&nbsp;&nbsp;</a>
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