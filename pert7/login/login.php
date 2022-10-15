<?php
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
    //cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
    //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else{
    //jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Login Admin </h1>

    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;"> Password atau username salah! </p>
    <?php endif; ?>

<ul>
    <form action="" method="post">
        <li>
            <label for="uname">Username : </label>
            <input type="text" name="username" id="uname">
        </li>
        <li>
            <label for="pwd">Password : </label>
            <input type="password" name="password" id="pwd">
        </li>
        <li>
            <button type="submit" name="submit"> login! </button>
        </li>
    </form>
</ul>
</body>
</html>