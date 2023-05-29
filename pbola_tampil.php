<?php

$bla = new App\Pbola;
$rows = $bla->tampil();

?>

<h2>Perlengkapan Bola</h2>

<a href="index.php?hal=pbola_input" class="btn">Tambah Barang</a>

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
        <td><?php echo $row['id_pbola']; ?></td>
        <td><?php echo $row['nama_pbola']; ?></td>
        <td><?php echo $row['hrg_pbola']; ?></td>
        <td><a href="index.php?hal=pbola_edit&id=<?php echo $row['id_pbola']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=pbola_delete&id=<?php echo $row['id_pbola']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
