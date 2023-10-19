<?php
session_start();

include("koneksi.php");

// Query untuk mengambil data dari tabel pembelian
$data_query = "SELECT * FROM pembelian";
$data_result = mysqli_query($conn, $data_query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lihat Data Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#f4e7cb">

    <header class="header">
        <h2 style="margin: auto;">DATA PEMBELIAN</h2>
    </header>
    <br><br>

    <table style="margin: auto;" border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pembeli</th>
            <th>No. Telepon</th>
            <th>Barang Dibeli</th>
            <th>Total Harga</th>
            <th>Alamat</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($data_result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['no_telp'] . "</td>";
            echo "<td>" . $row['barang'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
