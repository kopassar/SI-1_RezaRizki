<?php

$id = $_GET['id'];

$kategori = new App\Kategori();
$row = $kategori-> edit($id);
?>

<form action="categori_proses.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
    <tr>
        <td> KATEGORI NAMA </td>
        <td><input type="text" name="i_nama" value="<?php echo $row['nama']; ?>" </td>
    </tr>
    <tr>
        <td> KATEGORI KETERANGAN </td>
        <td><input type="text" name="i_keterangan" value="<?php echo $row['keterangan']; ?>" </td>
    </tr>  
    <tr>
        <td></td>
        <td><input type="submit" name="b_edit" value="UPDATE"</td>
    </tr>
</table>
</form>