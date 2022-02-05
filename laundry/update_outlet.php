<?php

session_start();
include 'connect.php';
$qry_laundry=mysqli_query($connect,"select * from outlet");

$id_outlet = $_POST['id'];
$nama_outlet = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];
$admin = $_POST['nama_admin'];

$query = "UPDATE outlet SET nama_outlet = '$nama_outlet', alamat = '$alamat', nama_admin = '$admin' WHERE id = $id_outlet";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{
echo "<script>alert('Berhasil update data');location.href= 'outlet.php';</script>";
}
else
{
    echo "<script>alert('Gagal update data');location.href= 'user.php';</script>";
}

?>