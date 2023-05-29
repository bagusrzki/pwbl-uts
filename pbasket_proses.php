<?php

require_once "inc/Koneksi.php";
require_once "app/Pbasket.php";

$bsk = new App\Pbasket();

if (isset($_POST['btn_simpan'])) {
    $bsk->simpan();
    header("location:index.php?hal=pbasket_tampil");
}

if (isset($_POST['btn_update'])) {
    $bsk->update();
    header("location:index.php?hal=pbasket_tampil");
}