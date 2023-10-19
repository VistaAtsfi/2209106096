<?php
session_start();

include("koneksi.php");


// Ambil data dari formulir
$nama_pembeli = mysqli_real_escape_string($conn, $_POST['nama']);
$no_telp = mysqli_real_escape_string($conn, $_POST['contact']);
$barang_dibeli = mysqli_real_escape_string($conn, $_POST['barang']);
$total_harga = mysqli_real_escape_string($conn, $_POST['harga']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);


// Mengeksekusi kueri untuk menambahkan pengguna baru ke database.
$user_pembelian_query = "INSERT INTO pembelian (id, nama, no_telp, barang, total, alamat) 
VALUES ('', '$nama_pembeli', '$no_telp', '$barang_dibeli', '$total_harga', '$alamat')";
?>
<html>
    <head>
<style>
    body {
        background-color: #f4e7cb;
    }

<?php
$user_pembelian_result = mysqli_query($conn, $user_pembelian_query) or die(mysqli_error($con));
?>
</style>
<meta http-equiv="refresh" content="1;url=index.php" />
</head>
<body>
<center>
    <P>Pembelian berhasil</P>
</center>
</html>

