<?php
    require ('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #f4e7cb;">
    <header class="header">
        <h2 style="margin: auto;">FORM PEMBELIAN</h2>
    </header>
    <br>

    <form method="POST" action="create.php"; style="padding: 30px;">
        <label style="color:#4f432e;">Nama Pembeli :</label>
        <input type="text" name="nama" required><br><br>

        <label style="color:#4f432e;">No. Telepon :</label>
        <input type="number" name="contact" required><br><br>

        <label style="color:#4f432e;">Barang yang Dibeli :</label>
        <input type="text" name="barang" required><br><br>

        <label style="color:#4f432e;">Total Harga :</label>
        <input type="number" name="harga" required><br><br>

        <label style="color:#4f432e;">Alamat :</label>
        <textarea name="alamat" required></textarea><br><br>

        <input type="submit" value="Simpan Pembelian">
    </form>
        
</body>
</html>
