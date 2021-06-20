<?php

$photo = new App\Photo();

$rows = $photo->tampil();

?>

<h2> Tambah Data PHOTO</h2>


<form action="photo_proses.php" method="POST">
<table>
    <tr>
        <td>TANGGAL</td>
        <td><input type="date" name="i_tanggal"></td>
    </tr>
    <tr>
        <td>TITLE</td>
        <td><input type="varchar" name="i_title"></td>
    </tr>
    <tr>
        <td>KETERANGAN</td>
        <td><input type="text" name="i_keterangan"></td>
    </tr>
    <tr>
        <td>POST</td>
        <td>
            <select name="i_post">
                <?php foreach ($rows as$row) { ?>
                    <option value="<?php echo $row ['id_post']; ?>"><?php echo $row ['keterangan']; ?></option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN"></td>
    </tr>
</table>