<?php
include 'navbar_form.php';
?>
<html>
    <head>
        <title>Uji coba login</title>
</head>
<body>
<div class="container">
  <h2>Login Laundry Kita Semua</h2>
  <form action="login.php" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
    </div>
    <button type="submit" class="btn btn-default" name="Login">Submit</button>
</div>
</form>
    </body>    
</html>