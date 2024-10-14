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
    $perusahaan_pemenang = mysqli_real_escape_string($conn, $_POST['perusahaan_pemenang']);
    $informasi_barang = mysqli_real_escape_string($conn, $_POST['informasi_barang']);

    // Step 4: SQL Query to insert data into the "pemenang_lelang" table
    $sql = "INSERT INTO form_pemenang_lelang ( perusahaan_pemenang, informasi_barang) 
            VALUES ( '$perusahaan_pemenang', '$informasi_barang')";

    // Step 5: Execute the query and provide feedback
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Data has been saved successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

// Step 6: Close the connection
$conn->close();
?>
