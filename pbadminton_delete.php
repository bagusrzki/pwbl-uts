<?php

$id = $_GET['id'];

$bdm = new App\pbadminton();
$rows = $bdm->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pbadminton_tampil">Kembali</a>
</div>