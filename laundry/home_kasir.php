<?php
include 'navbar_kasir.php';
session_start();
?>
<div class="container">
    <h3 align="center">Selamat Datang <?=$_SESSION['username']?>. Role sebagai <?=$_SESSION['role']?></h3>
</div>
</body>
    </html>