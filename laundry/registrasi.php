<?php
include 'navbar_kasir.php';
include 'navbar_form.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="container">
        <h3> Registrasi </h3>
<form action="#" method="post">
<div class="form-group">
                <label>Nama:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" class="form-control">
            </div>
<div  class="form-group">
<label>Jenis Kelamin:</label>
<select class="form-control" required>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
</div>
            <div class="form-group">
                <label>Telepon:</label>
                <input type="text" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-default">Tambah</button>
        </form>
</body>
</html>
<?php