<?php

$role = $_GET['role'] ?? 'guest'; 

if ($role === 'admin') {
    echo "<h2>Dashboard Admin</h2>";
    echo "<ul><li>Manajemen User</li><li>Laporan</li></ul>";
} elseif ($role === 'member') {
    echo "<h2>Dashboard Member</h2>";
    echo "<ul><li>Profil</li><li>Riwayat Pesanan</li></ul>";
} elseif ($role === 'seller') {
    echo "<h2>Dashboard Seller</h2>";
    echo "<ul><li>Daftar Produk</li><li>Pesanan Masuk</li></ul>";
} else {
    echo "<h2>Selamat datang, tamu</h2>";
    echo "<a href='login.php'>Login</a>";
}
?>
