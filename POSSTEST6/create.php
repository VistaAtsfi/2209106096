<?php
session_start();
include("koneksi.php");

// Ambil data dari formulir pembelian
$nama_pembeli = mysqli_real_escape_string($conn, $_POST['nama']);
$no_telp = mysqli_real_escape_string($conn, $_POST['contact']);
$barang_dibeli = mysqli_real_escape_string($conn, $_POST['barang']);
$total_harga = mysqli_real_escape_string($conn, $_POST['harga']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

// Mengeksekusi kueri untuk menambahkan pembelian ke database
$user_pembelian_query = "INSERT INTO pembelian (id, nama, no_telp, barang, total, alamat) 
VALUES ('', '$nama_pembeli', '$no_telp', '$barang_dibeli', '$total_harga', '$alamat')";

// Lakukan pembelian
$user_pembelian_result = mysqli_query($conn, $user_pembelian_query) or die(mysqli_error($conn));

// Proses upload file jika ada unggahan
if (isset($_POST["submit"])) {
    $targetDir = "upload/"; // Ganti dengan folder penyimpanan yang sesuai
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " berhasil diunggah.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file.";
    }
}

// Cek apakah pembelian berhasil
if ($user_pembelian_result) {
    echo "Pembelian berhasil. ";
} else {
    echo "Pembelian gagal. Silakan coba lagi.";
}

?>
<html>
<head>
    <style>
        body {
            background-color: #ac8c62;
        }
    </style>
    <meta http-equiv="refresh" content="1;url=index.php" />
</head>
<body>
    <center>
        <h3>Pembelian Berhasil</h3>
        <p>Anda akan dialihkan kembali ke halaman utama dalam 1 detik.</p>
    </center>
    <br>
</body>
</html>

