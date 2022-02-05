<?php

include 'connect.php';

$nama_paket = $_POST['nama_paket'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];


$query = "Insert Into paket (nama_paket, jenis, harga) Values ('$nama_paket','$jenis', '$harga')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'cucian.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'cucian.php';</script>";
}

?>