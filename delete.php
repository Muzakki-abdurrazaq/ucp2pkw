<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from bookstore where id='$id'");

header("location:index.php");