<?php

include 'connect.php';

$nama_outlet = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];
$nama_admin = $_POST['nama_admin'];


$query = "Insert Into outlet (nama_outlet, alamat, nama_admin) Values ('$nama_outlet', '$alamat', '$nama_admin')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'outlet.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'outlet.php';</script>";
}

?>