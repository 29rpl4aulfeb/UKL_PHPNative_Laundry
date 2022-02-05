<?php

include 'navbar.php';
include 'navbar_form.php';
include 'connect.php';
$qry_paket=mysqli_query($connect,"select * from paket where id = '".$_GET['id']."'");
$data=mysqli_fetch_array($qry_paket);

?>

<!DOCTYPE html>
<head>
    <title>update_cucian</title>
</head>
<body>
<div class="container">
    <form action="update_cucian.php" method="post">
    <div class="form-group">
    <label for="nama">Nama Paket</label>
    <input type="text" class="form-control" name="nama_paket" id="nama" value="<?php echo $data['nama_paket']; ?>">
</div>
    
<div class="form-group">    
<label for="jenis">Jenis</label>
<select name="jenis" class="form-control" value="<?php echo $data['jenis']; ?>">
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed_cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                    </select>
    
    <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control"name="harga" id="harga" value="<?php echo $data['harga']; ?>">
</div>
    
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="submit" class="btn btn-default" value="Simpan" name="btnSimpan">
</div>
</form>
</body>