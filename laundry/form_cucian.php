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
        <h3> Tambah Data Paket Cucian </h3>
<form action="create_cucian.php" method="post">
<div class="form-group">
                <label for="input-nama_paket">Nama Paket</label>
                <input type="text" class="form-control" name="nama_paket" id="input-nama_paket"></input>
            </div>
<label for="input-jenis">Jenis</label>
<select name="jenis" class="form-control" required>
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                    </select>
            <div class="form-group">
                <label for="input-harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="input-harga"></input>
            </div>
            
            <button type="submit" class="btn btn-default">Tambah</button>

        </form>
</body>
</html>