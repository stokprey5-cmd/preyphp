<?php
// validate_register.php
// Form validasi pendaftaran sederhana

// Ambil data dari form dengan filter
$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$age   = isset($_POST['age']) ? (int) $_POST['age'] : 0;

$errors = [];

// Validasi nama
if ($name === '') {
    $errors[] = "Nama wajib diisi.";
} elseif (strlen($name) < 3) {
    $errors[] = "Nama minimal 3 karakter.";
}

// Validasi email
if ($email === '') {
    $errors[] = "Email wajib diisi.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

// Validasi umur
if ($age <= 0) {
    $errors[] = "Umur harus berupa angka positif.";
} elseif ($age < 17) {
    $errors[] = "Usia minimal 17 tahun untuk mendaftar.";
}

// Tampilkan hasil
if (!empty($errors)) {
    echo "<h3>Form tidak valid:</h3>";
    echo "<ul>";
    foreach ($errors as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
    echo "<a href='register.php'>Kembali ke Form</a>";
} else {
    echo "<h3>Pendaftaran Berhasil!</h3>";
    echo "Terima kasih, <b>$name</b>. Data Anda sudah tersimpan.";
    // Disini bisa dilanjutkan dengan simpan ke database
}
?>
