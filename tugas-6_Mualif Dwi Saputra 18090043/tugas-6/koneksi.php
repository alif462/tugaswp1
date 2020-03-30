<?php
//Mualif Dwi Saputra 18090043
$koneksi = mysqli_connect("localhost:3307", "root", "", "db_ta_d4");
//chek koneksi
if (mysqli_connect_errno()){
    echo "koneksi database gagal :".mysqli_connect_error();
}else{
    echo "koneksi database berhasil";
}
?>