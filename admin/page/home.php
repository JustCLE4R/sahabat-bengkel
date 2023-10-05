<style>
  #digitalClock {
    font-size: 2rem;
    text-align: center;
}
.box {
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<?php 
  function getCount($table){
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT COUNT(id) FROM $table");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows [] = $row;
    }

    return $rows[0]["COUNT(id)"];
  }
?>

<p class="align-self-end" id="digitalClock">xxxx-xx-xx xx:xx:xx xx</p>
<div class="container">
  <div class="row justify-content-center">
    <div class="card col-3 m-1 p-1 align-self-baseline">
        <a href="?page=sparepart" class="text-center">
        <p class="text-center align-items-center">Total Onderdil</p>
        <span class="font-weight-bold text-center" style="font-size: 3rem;"><?= getCount('onderdil'); ?></span>
      </a>
      </div>
      <div class="card col-3 m-1 p-1 align-self-baseline">
        <a href="?page=client" class="text-center">
        <p class="text-center align-items-center">Total Testimoni</p>
        <span class="font-weight-bold text-center" style="font-size: 3rem;"><?= getCount('klien'); ?></span>
      </a>
      </div>
      <div class="card col-3 m-1 p-1 align-self-baseline">
        <a href="?page=contact" class="text-center">
        <p class="text-center align-items-center">Total Narahubung</p>
        <span class="font-weight-bold text-center" style="font-size: 3rem;"><?= getCount('hubungi'); ?></span>
      </a>
      </div>
      <div class="card col-3 m-1 p-1 align-self-baseline">
        <a href="?page=gallery" class="text-center">
        <p class="text-center align-items-center">Total Galeri</p>
        <span class="font-weight-bold text-center" style="font-size: 3rem;"><?= getCount('galeri'); ?></span>
      </a>
      </div>
      <div class="card col-3 m-1 p-1 align-self-baseline">
        <a href="?page=article" class="text-center">
        <p class="text-center align-items-center">Total Artikel</p>
        <span class="font-weight-bold text-center" style="font-size: 3rem;"><?= getCount('artikel'); ?></span>
      </a>
      </div>
  </div>
</div>



<script>
  // make div gloabally accessable
var containingItem = document.getElementById('digitalClock');


// give us the zero leading values
function ISODateString(d) {
    function pad(n) {
        return n < 10 ? '0' + n : n
    }
    return d.getFullYear() + '-' +
        pad(d.getMonth() + 1) + '-' +
        pad(d.getDate()) + ' ' +
        pad(d.getHours()) + ':' +
        pad(d.getMinutes()) + ':' +
        pad(d.getSeconds()) + ' ' +
        pad(d.getHours() >= 12 ? 'PM' : 'AM')
}

let doc = () => {
    let t = new Date();
    containingItem.innerHTML = ISODateString(t);
}

// set interval 1 sec so our clock
// our clock output can update on each
// second
setInterval(() => { doc() }, 1000);
</script>