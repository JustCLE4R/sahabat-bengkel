<?php 
$token = substr(round(((date("dHm") + 420 / 2)) * (substr(time(),5,3) + 1)),2,6);

if(isset($_GET['action'])){
  if($_GET['action'] == 'hapus'){
    $id = $_GET['id'];
    $nama = $_GET['nama'];

    unlink("../images/testimonial/$nama");

    $delete = mysqli_query($koneksi, "DELETE FROM klien WHERE id = $id");
    if($delete){
      // echo '<script>alert("Data Berhasil dihapus")</script>';
      echo '<script>window.location="index.php?page=client"</script>';
    }
    else{
      echo '<script>alert("Data Gagal dihapus")</script>';
      echo '<script>window.location="index.php?page=client"</script>';
    }
  }
}
?>
<div class="container">
  <h5>Halaman Testimoni</h5>
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="card p-4">
        <h3 class="text-center font-weight-bold fs-2" title="Token untuk Testimoni">Token</h3>
        <p class="font-weight-light text-center">untuk mengisi form testimoni</p><br>
        <p class="text-center font-weight-bold bg-success text-white" style="font-size: 1.5rem;"><?= $token; ?></p>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <table class="table table-striped">
        <thead class="table-primary">
          <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Testimoni</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $nomor = 1;
            $result = mysqli_query($koneksi, "SELECT * FROM klien");
            while ($row = mysqli_fetch_array($result)):
          ?>
          <tr>
            <td><?= $nomor; ?></td>
            <td><img src="../images/testimonial/<?= $row['gambar'] ?>" alt="testimoni" width="50"></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['testimoni']; ?></td>
            <td>
              <a href="?page=client&action=hapus&id=<?= $row['id'].'&nama='.$row['gambar'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin mengahpus Testimoni?')">Hapus</a>
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