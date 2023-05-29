<?php

$bsk = new App\Pbasket;
$rows = $bsk->tampil();

?>

<h2>Perlengkapan Basket</h2>

<a href="index.php?hal=pbasket_input" class="btn">Tambah Barang</a>

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
        <td><?php echo $row['id_pbasket']; ?></td>
        <td><?php echo $row['nama_pbasket']; ?></td>
        <td><?php echo $row['hrg_pbasket']; ?></td>
        <td><a href="index.php?hal=pbasket_edit&id=<?php echo $row['id_pbasket']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=pbasket_delete&id=<?php echo $row['id_pbasket']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
