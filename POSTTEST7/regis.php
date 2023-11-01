<?php

require "koneksi.php";

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($pass === $cpassword) {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM regis WHERE username = '$username'");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "
                <script> 
                alert('Username telah digunakan');
                document.location.href = 'regis.php';
                </script>
                ";
            } else {
                $sql = "INSERT INTO regis (username, password) VALUES ('$username', '$pass')";
                $insert_result = mysqli_query($conn, $sql);

                if ($insert_result) {
                    echo "
                        <script> 
                        alert('Registrasi berhasil');
                        document.location.href = 'login.php';
                        </script>
                    ";
                } else {
                    echo "
                    <script> 
                    alert('registrasi gagal');
                    document.location.href = 'regis.php';
                    </script>
                    ";
                }
            }
        } else {
            echo "Error in the query: " . mysqli_error($conn);
        }
    } else {
        echo "
                <script> 
                alert('password tidak sama');
                document.location.href = 'regis.php';
                </script>
                ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<br>

<body bgcolor="#f4e7cb">
    <!-- <header class="header"> -->
        <div class="foto-container">
            <img src="7.jpg" class="foto foto-bulat">
        </div>
        <center><h2 style="color: #4f432e;">Silakan Registrasi</h2><hr></center>
    <!-- </header> -->
                
                <form action="" method="POST">
                    <center><input type="text" name="username" placeholder="Username" class="textfield"></center> <br>
                    <center><input type="password" name="password" placeholder="Password" class="textfield"></center> <br>
                    <center><input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" class="textfield" required></center> <br><br>
                    <center><button type="submit" name="register" class="login-btn">Register</button></center>
                </form>
            </div>
        </div>
</body>

</html>