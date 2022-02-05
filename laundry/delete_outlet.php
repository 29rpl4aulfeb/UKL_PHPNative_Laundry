<?php

include 'connect.php';

$id_outlet = $_GET['id'];

$query = "DELETE FROM outlet WHERE id = $id_outlet";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "<script>alert('Berhasil hapus data');location.href= 'outlet.php';</script>";
}else{
    echo "<script>alert('Gagal hapus data');location.href= 'outlet.php';</script>";
}

?>