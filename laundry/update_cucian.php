<?php

session_start();
include 'connect.php';
$qry_laundry=mysqli_query($connect,"select * from paket");

$id = $_POST['id'];
$nama_paket = $_POST['nama_paket'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "UPDATE paket SET nama_paket = '$nama_paket', jenis = '$jenis', harga = '$harga' WHERE id = $id";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{
echo "<script>alert('Berhasil update data');location.href= 'cucian.php';</script>";
}
else
{
    echo "<script>alert('Gagal update data');location.href= 'cucian.php';</script>";
}

?>