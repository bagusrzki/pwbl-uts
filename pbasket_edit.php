<?php

$id = $_GET['id'];
$bsk= new App\Pbasket();

$row = $bsk->edit($id);
?>

<h2>Edit Barang</h2>

<form action="pbasket_proses.php" method="post">
    <input type="hidden" name="id_pbasket" value="<?php echo $row['id_pbasket']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_pbasket" value="<?php echo $row['nama_pbasket']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="hrg_pbasket" value="<?php echo $row['hrg_pbasket']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 