<?php

include 'navbar.php';
include 'navbar_form.php';
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM user WHERE id = $id";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<head>
    <title>update_user</title>
</head>
<body>
<div class="container">
        <h3> Edit User </h3>
    <form action="update_user.php" method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>">
</div>

<div class="form-group">
<label for="username">Username</label>
<input type="text" class = "form-control" name="username" id="username" value="<?php echo $row['username']; ?>">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" name="password" id="password" value="<?php echo $row['password']; ?>">
</div>
    
<div class="form-group">
    <label for="role">Role</label>
    <select name="role" class="form-control" value="<?php echo $row['role']; ?>">
                        <option value="kasir">kasir</option>
                        <option value="owner">owner</option>
                        <option value="admin">admin</option>
                    </select>
</div>

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="submit" class="btn btn-default" value="Simpan" name="btnSimpan">
</div>
</form>
</body>