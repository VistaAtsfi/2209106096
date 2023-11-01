<?php
    require ('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Form Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #f4e7cb;">
    <header class="header">
        <h2 style="margin: auto;">UBAH DATA PEMBELIAN PELANGGAN</h2>
    </header>
    <br>

    <form method="POST" action="update.php"; style="padding: 30px;">
        <label style="color:#4f432e;">Nomor id pemesanan :</label>
        <input type="number" name="id" required><br><br>

        <label style="color:#4f432e;">Nama Pembeli baru :</label>
        <input type="text" name="nama" required><br><br>

        <label style="color:#4f432e;">No. Telepon baru :</label>
        <input type="number" name="new_contact" required><br><br>

        <label style="color:#4f432e;">Barang yang Dibeli baru :</label>
        <input type="text" name="barang" required><br><br>

        <label style="color:#4f432e;">Total Harga baru :</label>
        <input type="number" name="harga" required><br><br>

        <label style="color:#4f432e;">Alamat baru :</label>
        <textarea name="alamat" required></textarea><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
        
</body>
</html>
