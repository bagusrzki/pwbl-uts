<?php

require_once "inc/Koneksi.php";
require_once "app/Pbadminton.php";

$bdm = new App\Pbadminton();

if (isset($_POST['btn_simpan'])) {
    $bdm->simpan();
    header("location:index.php?hal=pbadminton_tampil");
}

if (isset($_POST['btn_update'])) {
    $bdm->update();
    header("location:index.php?hal=pbadminton_tampil");
}