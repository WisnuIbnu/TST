<?php
// Daftar pengguna dan password
$users = [
    ['username' => 'ahmadfuadi', 'password' => '12345'],
    ['username' => 'wisnuibnu', 'password' => '123456'],
];

// Cek jika form login disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi login menggunakan fungsi array_filter
    $user = array_filter($users, function($user) use ($username, $password) {
        return $user['username'] === $username && $user['password'] === $password;
    });

    if ($user) {
        // Login berhasil
        session_start(); // Mulai sesi
        $_SESSION['username'] = $username; // Set session pengguna
        header("Location: welcome.php");
        exit();
    } else {
        // Redirect kembali ke halaman login dengan pesan error
        header("Location: index.html?error=true");
        exit();
    }
}
