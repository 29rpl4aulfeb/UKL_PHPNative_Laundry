<?php

include 'navbar.php';
include 'navbar_form.php';
include 'connect.php';

$id_outlet = $_GET['id'];

$query = "SELECT * FROM outlet WHERE id = $id_outlet";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<head>
    <title>Hadew</title>
</head>
<body>
<div class="container">
        <h3> Edit Outlet </h3>
    <form action="update_outlet.php" method="post">
    <div class="form-group">
         <label for="nama">Nama Outlet</label>
         <input type="text" class ="form-control" name="nama_outlet" id="nama" value="<?php echo $row['nama_outlet']; ?>">
</div>

<div class="form-group">         
<label for="ini_alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" id="ini_alamat" value="<?php echo $row['alamat']; ?>">
</div>

<div class="form-group">
<label for="admini">Nama Admin</label>
<input type="text" class="form-control" name="nama_admin" id="admini" value="<?php echo $row['nama_admin']; ?>">
</div>

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="submit" class="btn btn-default" value="Simpan" name="btnSimpan">
</div>
</form>
</body>