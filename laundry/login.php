<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == ""){
    echo "<script>alert('username/password kosong');location.href= 'form_login.php';</script>";
    //header('location: form_login.php');
}else{
    $pass = md5($password);
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$pass'";
echo $query;
$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

if($num == 1){
    $data=mysqli_fetch_array($result);
    $_SESSION['username']=$username;
    $_SESSION['role']=$data['role'];
    if($_SESSION['role']=='admin'){
        header("location: home_admin.php");
    }elseif($_SESSION['role']=='kasir'){
        header("location: home_kasir.php");
    }else{
        header("location: home_owner.php");
    }

}else{
    echo "<script>alert('username/password salah');location.href= 'form_login.php';</script>";
    //header("location: form_login.php");
}
}

?>