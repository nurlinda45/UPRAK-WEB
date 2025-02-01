<?php
require 'dbCon.php'
$id = $_GET['id'];

//ambil data
$sql = "select * from tbl_mahasiswa";
$result = mysqli_query($Conn,$sql);
