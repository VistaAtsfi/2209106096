<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data yang dikirimkan melalui formulir
    $nama = $_POST["nama"];
    $nomorTelepon = $_POST["nomorTelepon"];
    $password = $_POST["password"];

    if (!empty($nama) && !empty($nomorTelepon) && !empty($password)) {
        // Simpan data di session
        session_start();
        $_SESSION["nama"] = $nama;
        $_SESSION["nomorTelepon"] = $nomorTelepon;
        $_SESSION["password"] = $password;

        // Redirect ke halaman "success.php"
        header("Location: loginSukses.php");
        exit;
    } else {
        // Salah satu atau beberapa kolom belum diisi, tampilkan pesan peringatan
        $error_message = "Silakan isi semua kolom.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS untuk menyembunyikan pop-up "Login Berhasil !" secara default */
        #successPopup {
            display: none;
        }
    </style>
</head>
<body style="background-color: #f4e7cb;">

    <header class="header">
        <h2 style="margin: auto;">LOGIN</h2>
    </header>
    <br>
    <br>

    <!-- Pop-up form inputan -->
    <div id="popupForm" class="modal">
        <div class="modal-content">  
        <form method="POST">
            <label for="nama" style="color:#4f432e; padding: 30px;">Nama :</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
            <br>
            <br>

            <label for="nomorTelepon" style="color:#4f432e; padding: 30px;">Nomor Telepon :</label>
            <input type="number" name="nomorTelepon" id="nomorTelepon" placeholder="Masukkan Nomor Telepon" required>
            <br>
            <br>

            <label for="password" style="color:#4f432e; padding: 30px;">Password :</label>
            <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
            <br>
            <br>

            <button type="submit" id="submitData">Login</button>
        </form>
        </div>
    </div>

    <div id="successPopup" class="modal">
        <div class="modal-content">
            <h3 style="color: #4f432e; text-align: center;">Login Berhasil !</h3>
        </div>
    </div>

    <script>
        // Saat halaman dimuat, isi data yang tersimpan
        <?php
        if (isset($_SESSION["nama"])) {
            echo 'document.getElementById("nama").value = "' . $_SESSION["nama"] . '";';
            echo 'document.getElementById("nomorTelepon").value = "' . $_SESSION["nomorTelepon"] . '";';
            echo 'document.getElementById("password").value = "' . $_SESSION["password"] . '";';
        }
        ?>
    </script>

    <?php
    if (isset($error_message)) {
        echo '<script>alert("' . $error_message . '");</script>';
    }
    ?>
</body>
</html>
