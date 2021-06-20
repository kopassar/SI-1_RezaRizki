<?php

require_once "inc/config.php";

$kategori = new App\Kategori();

if (isset($_POST['b_input'])){
    $kategori->input();
    header("location:index.php?page=categori_tampil");
}

if (isset($_POST['b_edit'])){
    $kategori->update();
    header("location:index.php?page=categori_tampil");
}