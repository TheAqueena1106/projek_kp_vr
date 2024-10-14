<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 3: Get and sanitize form data
    $nama_perusahaan = mysqli_real_escape_string($conn, $_POST['nama_perusahaan']);
    $kontak = mysqli_real_escape_string($conn, $_POST['kontak']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']); // Using 'harga' here
    $metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);

    // Step 4: SQL Query to insert data
    $sql = "INSERT INTO daftar_lelang (nama_perusahaan, kontak, alamat, harga, metode_pembayaran) 
            VALUES ('$nama_perusahaan', '$kontak', '$alamat', '$harga', '$metode_pembayaran')";

    // Step 5: Execute the query and provide feedback
    if ($conn->query($sql) === TRUE) {
        // Success message
        echo "<div class='alert alert-success'>Data has been saved successfully!</div>";
    } else {
        // Error message
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

// Step 6: Close the connection
$conn->close();
?>
