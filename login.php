<?php

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$valid_user = 'prey';
$valid_pass = 'preynibos';

if ($username === '' || $password === '') {
    echo "Silakan masukkan username dan password.";
} else {
    if ($username === $valid_user && $password === $valid_pass) {
        echo "Login berhasil. Selamat datang, $username!";
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>

<form method="post" action="login.php">
  Username: <input name="username"><br>
  Password: <input name="password" type="password"><br>
  <button type="submit">Login</button>
</form>
-->
