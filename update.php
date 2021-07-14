<?php

include 'config.php';

$id = $_POST['id'];
$nama_buku = $_POST['Nama buku'];
$kategori_buku = $_POST['Kategori buku'];
$penerbit = $_POST['Penerbit'];
$harga = $_POST['Harga'];
$diskon = $_POST['Probabilitas diskon'];

mysqli_query($koneksi, "update bookstore set Nama buku='$nama_buku', Kategori buku='$kategori_buku', Penerbit='$penerbit', Harga='$harga', Probabilitas diskon='$diskon' where id='$id'");

header("location:home.php");