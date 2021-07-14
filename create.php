<?php
//Include koneksi database
include './config.php';

//Menangkap data yang dikirim dari form
$namabuku = $_POST['Nama buku'];
$kategoribuku = $_POST['Kategori buku'];
$penerbit = $_POST['Penerbit'];
$harga = $_POST['Harga'];
$probabilitasdiskon = $_POST['Probabilitas diskon'];

//Menginput data ke database
$result = mysqli_query($koneksi, "INSERT INTO bookstore VALUES(0,'$namabuku', '$kategoribuku', '$penerbit', '$harga', '$probabilitasdiskon')");
    if($result){
        header("location:./home.php");
    }else {
        echo $koneksi->error; 
    }
?>