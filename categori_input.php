<?php

$kategori = new App\Kategori();

$rows = $kategori->tampil();

?>

<h2> Tambah Data Kategori </h2>

<form action="categori_proses.php" method="POST">
<table>
    <tr>
        <td>KATEGORI NAMA</td>
        <td><input type="text" name="i_nama"></td>
    </tr>
    <tr>
        <td>KATEGORI KETERANGAN</td>
        <td><input type="text" name="i_keterangan"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN"></td>
    </tr>
</table>