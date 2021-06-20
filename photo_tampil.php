<?php

$photo = new App\Photo();

$rows = $photo->tampil();

?>

<h2> Data Kategori </h2>

<a href="index.php?page=photo_input">Tambah</a>
<table>
<tr>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>TITLE</th>
        <th>KETERANGAN</th>
        <th>POST ID</th>
    </tr>
    <?php foreach ($rows as$row) { ?>
    <tr>
        <td> <?php echo $row ['id_photo']; ?> </td>
        <td> <?php echo $row ['tangggal']; ?> </td>
        <td> <?php echo $row ['title']; ?> </td>
        <td> <?php echo $row ['keterangan']; ?> </td>
        <td> <?php echo $row ['id_post']; ?> - <?php echo $row ['keterangan']; ?> </td>
        <td><a href="index.php?page=photo_edit&id=<?php echo $row['id_photo']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>