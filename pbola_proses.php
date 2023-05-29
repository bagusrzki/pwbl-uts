<?php

require_once "inc/Koneksi.php";
require_once "app/pbola.php";

$bla = new App\Pbola();

if (isset($_POST['btn_simpan'])) {
    $bla->simpan();
    header("location:index.php?hal=pbola_tampil");
}

if (isset($_POST['btn_update'])) {
    $bla->update();
    header("location:index.php?hal=pbola_tampil");
}