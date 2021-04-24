<?php

// koneksi ke database
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

// cek koneksi database
// apabila error
if(mysqli_connect_errno()) {
    echo "koneksi database gagal :" .mysqli_connect_errno();

}