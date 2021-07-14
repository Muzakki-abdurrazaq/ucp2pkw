<?php
//Koneksi ke database ("" merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "ucp2pkw_Muzakkiabdurrazaq", "20190140014", "ucp2pkw_tokobukuaskara");

//Cek koneksi ke database
//apabila error
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}