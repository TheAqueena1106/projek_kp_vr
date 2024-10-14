<?php
// Konfigurasi database
$servername = "localhost";
$username_db = "root"; // Ganti sesuai dengan username database Anda
$password_db = ""; // Ganti sesuai dengan password database Anda
$dbname = "user_management"; // Ganti dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Ambil data dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role']; // Tambahan untuk role

// Validasi input
if (empty($id) || empty($username) || empty($password) || empty($role)) {
    die("Semua field harus diisi!");
}

// Sanitasi input untuk keamanan
$id = mysqli_real_escape_string($conn, $id);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$role = mysqli_real_escape_string($conn, $role); // Sanitasi role

// Hash password untuk keamanan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memasukkan data ke dalam tabel users
$sql = "INSERT INTO users (id, username, password, role) VALUES ('$id', '$username', '$hashed_password', '$role')";

if ($conn->query($sql) === TRUE) {
    // Jika registrasi berhasil, arahkan ke halaman login
    header("Location: login.html");
    exit(); // Jangan lupa tambahkan exit setelah header
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
