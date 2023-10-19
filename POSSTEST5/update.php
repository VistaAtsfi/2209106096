<?php
    require('koneksi.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari formulir
        $nama_pembeli_baru = mysqli_real_escape_string($conn, $_POST['nama']);
        $id = $_POST['id'];
        $no_telp_baru = $_POST['new_contact'];
        $barang_dibeli_baru = mysqli_real_escape_string($conn, $_POST['barang']);
        $total_harga_baru = $_POST['harga'];
        $alamat_baru = mysqli_real_escape_string($conn, $_POST['alamat']);

        // Mengeksekusi kueri untuk mengubah data pembelian dalam database.
        $update_pembelian_query = "UPDATE pembelian SET 
            nama = '$nama_pembeli_baru', 
            no_telp = '$no_telp_baru', 
            barang = '$barang_dibeli_baru', 
            total = '$total_harga_baru', 
            alamat = '$alamat_baru' 
        WHERE id = $id";

        $update_pembelian_result = mysqli_query($conn, $update_pembelian_query);

        if ($update_pembelian_result) {
            echo "Data pembelian berhasil diubah.";
            ?>
            <meta http-equiv="refresh" content="1;url=index.php" />
            <?php
        } else {
            echo "Error: " . $update_pembelian_query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Metode permintaan tidak valid.";
    }
?>
