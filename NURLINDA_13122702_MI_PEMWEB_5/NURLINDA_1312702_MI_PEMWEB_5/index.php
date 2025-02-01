<?php
require 'dbcrud.php';

//ambil data
$sql = "select * from tbl_mahasiswa";
$result = mysqli_query($Conn,$sql);
// Menambahkan fungsi tambah Data
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO tbl_mahasiswa (nim, nama, email)
    values('$nim, $nama, $email')";
    mysqli_query($conn, $query);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>

<!------ Membuat From Input Data -->
<h1>Menambah data mahasiswa</h1>
<From action="" method="post">
<table border="2">
    <tr>
        <td><label for="nim">NIM</label></td>
        <td><Input type="text" name="nama" require></td>
    </tr>
    <tr>
        <td><label for="nim">NAMA</label></td>
        <td><Input type="text" name="nama" require></td>
    </tr>
    <tr>
         <td><label for="e-mail">E-MAIL</label></td>
        <td><Input type="text" name="email" require></td>
    </tr>
    <tr>
        <td><button type="reset">RESET</button></td>
        <td><button type="submit" name="submit"></td>
</tr>
</table>
</form>


    <h1> Daftar Mahasiswa</h1>
    <a href="create.php"> Tambah data</a>
    <table border="1" cellpadding="10">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>E-MAIL</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($result)):?>
    <tr>
    <td><?= $row['nim'];?></td>;
    <td><?= $row['nama'];?></td>;
    <td><?= $row['email'];?></td>;
    <td>
        <a href="delete.php?id=<? $row['id']; ?>" onclick="return confirmn(Apakah Anda yakin Hapus">Delete</a>
        <a href="update.phpid=<? $row['id']; ?>">Update</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>