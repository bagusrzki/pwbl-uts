<?php

$bdm = new App\Pbadminton;
$rows = $bdm->tampil();

?>

<h2>Perlengkapan Badminton</h2>

<a href="index.php?hal=pbadminton_input" class="btn">Tambah Barang</a>

<table>
    <tr>
        <th>ID BARANG</th>
        <th>NAMA BARANG</th>
        <th>HARGA BARANG</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pbadminton']; ?></td>
        <td><?php echo $row['nama_pbadminton']; ?></td>
        <td><?php echo $row['hrg_pbadminton']; ?></td>
        <td><a href="index.php?hal=pbadminton_edit&id=<?php echo $row['id_pbadminton']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=pbadminton_delete&id=<?php echo $row['id_pbadminton']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
