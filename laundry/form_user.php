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
        <h3> Tambah Data User </h3>
<form action="create_user.php" method="post">
<div class="form-group">
                <label for="input-nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="input-nama">
            </div>
            <div class="form-group">
                <label for="input-username">Username:</label>
                <input type="text" class="form-control" name="username" id="input-username">
            </div>
            <div class="form-group">
                <label for="input-password">Password:</label>
                <input type="text" class="form-control" name="password" id="input-password">
            </div>
<label for="input-role" class="form-label">Role:</label>
<select name="role" class="form-control" required>
                        <option value="kasir">kasir</option>
                        <option value="owner">owner</option>
                        <option value="admin">admin</option>
                    </select>
            <br>
            <button type="submit" class="btn btn-default">Tambah</button>

        </form>
</body>
</html>
<?php