<?php
session_start();
include 'navbar.php';
include 'connect.php';

$query ="SELECT * FROM user";

$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

?>

<html>
    <head>
        <title>User</title>
</head>
<body>
    <div class="container">
    <h3> User Laundry Kita Semua </h3>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
if($num >0){
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data['id'] . "</td>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $data['username'] . "</td>";
        echo "<td>" . $data['password'] . "</td>";
        echo "<td>" . $data['role'] . "</td>";
        echo "<td><a href='form_update_user.php?id=" . $data['id'] . "'>Edit</a> ";
        echo "<td><a href='delete_user.php?id=" . $data['id'] . "'onClick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")' >Delete</a></td>";
        $no++;
    }
}else{
    echo "<td colspan='5'>Tidak ada data</td>";
}
?>
</tbody>
</table>
<br>
<button><a href="form_user.php">Tambah</a></button>
</div>
</body>
</html>