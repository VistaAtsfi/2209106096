<?php
    require('koneksi.php');
    
    // Jika formulir dikirimkan
    if (isset($_POST['hapus'])) {
        $id_pembelian = $_POST['id_pembelian'];
        
        // Mengeksekusi query untuk menghapus data berdasarkan ID
        $delete_query = "DELETE FROM pembelian WHERE id = $id_pembelian";
        
        if (mysqli_query($conn, $delete_query)) {
            echo '<div style="text-align: center;">Data pembelian berhasil dihapus.</div>';
        } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #f4e7cb;">
    <header class="header">
        <h2 style="margin: auto;">HAPUS DATA PEMBELIAN</h2>
    </header>
    <br>

    <form method="POST" action="delete.php" style="padding: 30px;">
        <label style="color:#4f432e;">ID Pembelian yang akan dihapus :</label>
        <input type="number" name="id_pembelian" required><br><br>

        <input type="submit" name="hapus" value="Hapus Data">
    </form>
</body>
</html>
