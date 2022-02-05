<?php
include 'navbar.php';
include 'navbar_form.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="container">
        <h3> Tambah Outlet </h3>
<form action="create_outlet.php" method="post">
            <div class="form-group">
                <label for="input-nama_outlet">Nama Outlet:</label>
                <input type="text" class="form-control" name="nama_outlet" id="input-nama_outlet">
            </div>
            <div class="form-group">
                <label for="input-alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="input-alamat"></input>
            </div>
            
            <div class="form-group">
                <label for="input-nama_admin">Nama Admin</label>
                <input type="tlp" class="form-control" name="nama_admin" id="input-nama_admin"></input>
            </div>
            <button type="submit" class="btn btn-default">Tambah</button>
        </form>
</div>
</body>
</html>