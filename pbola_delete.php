<?php

$id = $_GET['id'];

$bla = new App\Pbola();
$rows = $dpr->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pbola_tampil">Kembali</a>
</div>