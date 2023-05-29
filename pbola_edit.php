<?php

$id = $_GET['id'];
$bla= new App\Pbola();

$row = $bla->edit($id);
?>

<h2>Edit Barang</h2>

<form action="pbola_proses.php" method="post">
    <input type="hidden" name="id_pbola" value="<?php echo $row['id_pbola']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_pbola" value="<?php echo $row['nama_pbola']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="hrg_pbola" value="<?php echo $row['hrg_pbola']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 