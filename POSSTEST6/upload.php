<?php
session_start();
include("koneksi.php");

if (isset($_POST["submit"])) {
    $targetDir = "upload/"; // Folder penyimpanan file yang telah diunggah
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    // Periksa apakah file sudah ada
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Batasi jenis file yang dapat diunggah
    $allowedExtensions = array("jpg", "jpeg", "png"); // Sesuaikan dengan jenis file yang diizinkan
    $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Maaf, hanya file dengan ekstensi JPG, JPEG, dan PNG yang diizinkan.";
        $uploadOk = 0;
    }

    // Batasi ukuran file
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // Misalnya, batasi hingga 5MB
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file tidak dapat diunggah.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " berhasil diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>

<html>
<head>
    <style>
        body {
            background-color: #ac8c62;
        }
    </style>
    <meta http-equiv="refresh" content="10;url=index.php" />
</head>
<body>
    <center>
        <p>Anda akan dialihkan kembali ke halaman utama dalam 1 detik.</p>
    </center>
</body>
</html>
