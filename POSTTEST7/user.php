<?php
require ('koneksi.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOKO ALAT MUSIK</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    function updateTime() {
        var date = new Date();
        var options = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
        var timeString = date.toLocaleTimeString('en-US', options);
        document.getElementById('time').innerHTML = timeString;
    }

    // Memperbarui waktu setiap detik
    setInterval(updateTime, 1000);
    </script>

</head>

<body bgcolor="#f4e7cb">
    <header class="header">
        <div class="menu-icon">
            ☰
        </div>
        <h2>
            <a class="brand" href="#">TOKO ALAT MUSIK VISTA</a>
        </h2>
        
        <nav>
            <ul class="menu">
                <li class="menu-item"><a href="index.php" title="Home">Home</a></li>
                <li class="menu-item"><a href="aboutMe.html" title="About Me">About Me</a></li>
                <li class="menu-item"><a href="contact.html" title="Contact">Contact</a></li>
                <li class="menu-item"><a href="beli.php" title="beli">Pembelian</a></li>
                <li class="menu-item"><a href="read.php" title="lihat">Cek Pembelian</a></li>
                <li class="menu-item"><a href="delete.php" title="hapus">Hapus Pembelian</a></li>

                <label class="theme-switch" for="aboutMeCheckbox">
                    <input type="checkbox" id="aboutMeCheckbox" />
                    <div class="slider round"></div>
                </label>
                <em id="about-me-theme-label">Light Mode</em>
            </ul>
        </nav>
        
        <!-- <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
            <em id="theme-label">Dark Mode</em>
        </div> -->

    </header>

    <br>
    <div style="display: flex; justify-content: flex-end; margin-right: 2cm;">
        <button id="adminLoginButton">Login Admin</button>
    </div>

        <style>
        #adminLoginButton {
            background-color: #ac8c62;
            color: #fff; 
            padding: 10px 20px; 
            border: none;
            border-radius: 5px; 
            cursor: pointer; 
        }

        /* Hover effect (saat kursor mengarah ke tombol) */
        #adminLoginButton:hover {
            background-color: #4f432e;
        }
        </style>

        <script>
            // Event listener untuk tombol "Login sebagai Admin"
            document.getElementById('adminLoginButton').addEventListener('click', function() {
                window.location.href = 'login.php';
            });
            
        </script>

    <!-- <main> -->
        <h3><div id="time" style="color: #4f432e; text-align: center"></h2></div>
        <h2 style="color: #4f432e; text-align: center;">Selamat Datang di TOKO ALAT MUSIK VISTA</h2> <br>
        
        <section class="container">
            <table style="margin-left: 100px;">
                <tr>
                    <td>
                        <div>
                            <div class="instrument">
                                <img src="1.jpg" alt="Alat Musik 1">
                                <h3 style="color: #4f432e;">
                                    <div class="instrument-description">HARPA</div>
                                </h3>
                                <h5 style="color: #4f432e;">Rp 25.000.000</h5>
                            </div>
                    <td>
                        <div class="instrument">
                            <img src="2.jpg" alt="Alat Musik 2">
                            <h3 style="color: #4f432e;">
                                <div class="instrument-description">PIANO</div>
                            </h3>
                            <h5 style="color: #4f432e;">Rp 35.000.000</h5>
                        </div>
                    </td>
                    <td>
                        <div class="instrument">
                            <img src="3.jpg" alt="Alat Musik 3">
                            <h3 style="color: #4f432e;">
                                <div class="instrument-description">GITAR</div>
                            </h3>
                            <h5 style="color: #4f432e;">Rp 12.000.000</h5>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="instrument">
                            <img src="6.jpg" alt="Alat Musik 6">
                            <h3 style="color: #4f432e;">
                                <div class="instrument-description">HARMONIKA</div>
                            </h3>
                            <h5 style="color: #4f432e;">Rp 5.000.000</h5>
                        </div>
                    </td>
                    <td>
                        <div class="instrument">
                            <img src="5.jpg" alt="Alat Musik 5">
                            <h3 style="color: #4f432e;">
                                <div class="instrument-description">BIOLA</div>
                            </h3>
                            <h5 style="color: #4f432e;">Rp 20.000.000</h5>
                        </div>
                    </td>
                    <td>
                        <div class="instrument">
                            <img src="4.jpg" alt="Alat Musik 4">
                            <h3 style="color: #4f432e;">
                                <div class="instrument-description">KALIMBA</div>
                            </h3>
                            <h5 style="color: #4f432e;">Rp 3.000.000</h5>
                        </div>
                    </td>
            </table>
        </section>
        <!-- <div id="welcomeModal" class="modal">
            <div class="modal-content">
                <h2 style="color: #4f432e;">Selamat Datang Pelanggan</h2> <br>
                <button id="closeWelcomeModal">OK</button>
            </div>
        </div> -->

        <!-- Pop-up notifikasi -->
        <div id="notification" class="notification">
            Selamat Datang Pelanggan!
        </div>

        <!-- Script untuk menampilkan notifikasi -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Tampilkan notifikasi selama 2 detik
                var notification = document.getElementById('notification');
                notification.style.display = 'block';
                setTimeout(function () {
                    notification.style.display = 'none';
                }, 2000);
            });
        </script>

        <center>
            <div id="welcomeModal" class="modal">
                <div class="modal-content">
                    <button id="aboutMeButton">Silakan lanjut ke halaman About Me</button>
                    <button id="contactButton">Silakan lanjut ke halaman Contact</button>
                </div>
            </div> 
        </center>

    <!-- </main> -->
    
    <footer class="border">
        <p>&copy; 2023 TOKO ALAT MUSIK VISTA</p>
    </footer>
    <script src="jQuery.js"></script>


    <script>
        $(document).ready(function() {
            // Event listener untuk tombol "Lanjut ke About Me"
            $("#aboutMeButton").click(function() {
                window.open("aboutMe.html", "_blank"); // Membuka halaman About Me dalam tab baru
            });

            // Event listener untuk tombol "Lanjut ke Contact"
            $("#contactButton").click(function() {
                window.open("contact.html", "_blank"); // Membuka halaman Contact dalam tab baru
            });
        });
    </script>

    <script>
        const indexthemeSwitch = document.querySelector('#aboutMeCheckbox');

        // Fungsi untuk mengaktifkan Dark Mode
        function enableDarkMode() {
            document.body.setAttribute('data-theme', 'dark');
        }

        // Fungsi untuk menonaktifkan Dark Mode
        function disableDarkMode() {
            document.body.removeAttribute('data-theme');
        }

        // Event listener untuk mengubah tema saat kotak centang berubah
        indexthemeSwitch.addEventListener('change', function () {
            if (this.checked) {
                enableDarkMode();
            } else {
                disableDarkMode();
            }
        });

        // Fungsi untuk memeriksa preferensi tema
        function checkindexThemePreference() {
            const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (prefersDarkMode) {
                enableDarkMode();
                indexthemeSwitch.checked = true;
            }
        }

        // Panggil fungsi untuk memeriksa preferensi tema saat halaman dimuat
        checkindexThemePreference();
    </script>
      
</body>
</html>