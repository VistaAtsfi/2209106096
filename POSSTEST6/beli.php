<?php
require('koneksi.php');

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $no_telp = $_POST['contact'];
    $barang = $_POST['barang'];
    $total = $_POST['harga'];
    $alamat = $_POST['alamat'];

    // Periksa apakah file gambar telah diunggah
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $img = $_FILES['gambar']['name'];
        $explode = explode('.', $img);
        $ekstensi = strtolower(end($explode));
        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        // Ganti path direktori tujuan sesuai keinginan Anda
        $direktori_tujuan = 'path/ke/direktori/tujuan/' . $gambar_baru;

        if (move_uploaded_file($tmp, $direktori_tujuan)) {
            $result = mysqli_query($conn, "INSERT INTO pembelian 
            (id, nama, no_telp, barang, total, alamat, gambar)
            VALUES ('', '$nama', '$no_telp', '$barang', '$total', '$alamat', '$gambar_baru')");

            if ($result) {
                echo "
                <script>
                    alert('Data Berhasil DiTambahkan!');
                    document.location.href = 'read.php'
                </script>";
            } else {
                echo "
                <script>
                    alert('Data Gagal DiTambahkan!');
                    document.location.href = 'beli.php'
                </script>";
            }
        } else {
            echo "Gagal mengupload gambar!";
        }
    } else {
        echo "Gagal mengupload gambar. Pastikan Anda memilih file gambar untuk diunggah.";
    }
}
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

        <label style="color:#4f432e;">Unggah Gambar :</label>
        <input type="file" name="gambar" required><br><br>

        <input type="submit" value="Simpan Pembelian">
    </form>

    <!-- Tabel unggah file -->
    <!-- <table style="margin: auto; border: 2px solid #4f432e; padding: 10px;">
        <tr>
            <td>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <label for="fileToUpload">Unggah File:</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Unggah File" name="submit">
                </form>
            </td>
        </tr>
    </table> -->
        
</body>
</html>
