<?php

$kategori = new App\Kategori();

$rows = $kategori->tampil();

?>

<h2> Data Categori </h2>

<a href="index.php?page=categori_input">Tambah</a>
<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>KETERANGAN</th>
    </tr>
    <?php foreach ($rows as$row) { ?>
    <tr>
        <td> <?php echo $row ['id_kategori']; ?> </td>
        <td> <?php echo $row ['nama']; ?> </td>
        <td> <?php echo $row ['keterangan']; ?> </td>
        <td><a href="index.php?page=categori_edit&id=<?php echo $row['id_kategori']; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>