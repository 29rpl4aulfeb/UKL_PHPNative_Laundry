<?php

include 'connect.php';

$id_paket = $_GET['id'];

$query = "DELETE FROM paket WHERE id = $id_paket";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "<script>alert('Berhasil hapus data');location.href= 'cucian.php';</script>";
}else{
    echo "<script>alert('Gagal hapus data');location.href= 'cucian.php';</script>";
}
?>