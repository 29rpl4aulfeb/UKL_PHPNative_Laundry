<?php
include 'navbar_owner.php';
session_start();
?>

<html>
    <head>
        <title></title>
</head>
<body>
    <div claas="container">
    <h3 align="center">Selamat Datang <?=$_SESSION['username']?>. Role sebagai <?=$_SESSION['role']?>
</div>
</body>
    </html>