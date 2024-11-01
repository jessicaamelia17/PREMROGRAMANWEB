<?php
//koneksi ke database
$connect = mysqli_connect("localhost", "root", "","praktikumdb");

//periksa koneksi
if (mysqli_connect_errno()){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>