<?php

session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login1.css">
</head>
    <body>
        <div class="login">
            <h2 class="login-header">Silakan Login Terlebih Dahulu</h2>
            <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic;"> Username / Password yang Anda Masukkan salah!</p>
            <?php endif; ?>
            <form class="login-container" action="" method="post">
                <p>
                    <input type="text" placeholder="Username" name="username" />
                </p>
                <p>
                    <input type="password" placeholder="Password" name="password" />
                </p>
                <p>
                    <input type="submit" name="login" />
                </p>
            </form>
        </div>
    </body>
</html>