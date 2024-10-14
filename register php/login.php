<?php
session_start();

// Include file konfigurasi database
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna berdasarkan username
    $sql = "SELECT id, username, password, role FROM users WHERE username = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // Jika username ditemukan
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password, $role);
            if ($stmt->fetch()) {
                // Verifikasi password
                if (password_verify($password, $hashed_password)) {
                    // Login berhasil, mulai session
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $role;

                    // Cek role user dan arahkan ke halaman yang sesuai
                    if ($role == 'admin') {
                        header("Location: indeks_admin.html"); // Halaman admin
                    } elseif ($role == 'user') {
                        header("Location: indeks_user.html"); // Halaman user
                    }
                    exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
                } else {
                    echo "Password yang Anda masukkan salah.";
                }
            }
        } else {
            echo "Username tidak ditemukan.";
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
