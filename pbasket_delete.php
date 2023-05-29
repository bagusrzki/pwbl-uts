<?php

$id = $_GET['id'];

$bsk = new App\Pbasket();
$rows = $bsk->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pbasket_tampil">Kembali</a>
</div>