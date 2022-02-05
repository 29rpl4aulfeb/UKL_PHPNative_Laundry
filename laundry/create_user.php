<?php

include 'connect.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "Insert Into user (nama, username, password, role) Values ('$nama', '$username', MD5('$password'), '$role')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo"<script>alert('Berhasil Menambahkan Data');location.href= 'user.php';</script>";
}else{
    echo"<script>alert('Gagal Menambahkan Data');location.href= 'user.php';</script>";
}
?>