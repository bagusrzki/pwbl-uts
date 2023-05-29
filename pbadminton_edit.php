<?php

$id = $_GET['id'];
$bdm= new App\Pbadminton();

$row = $bdm->edit($id);
?>

<h2>Edit Barang</h2>

<form action="pbadminton_proses.php" method="post">
    <input type="hidden" name="id_pbadminton" value="<?php echo $row['id_pbadminton']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_pbadminton" value="<?php echo $row['nama_pbadminton']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="hrg_pbadminton" value="<?php echo $row['hrg_pbadminton']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 