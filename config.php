<?php

// koneksi ke database ("" password phpmyadmin)

$koneksi = mysqli_connect("localhost","root","","mahasiswa");

//cek koneksi ke database 
//apabila eror du

if(mysqli_connect_errno()){
    echo "Koneksi database Gagal : " . mysqli_connect_error();
}