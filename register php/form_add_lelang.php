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
    if (isset($_POST['Pendaftaran'])) {
        // Process "Form Lelang"
        $no = mysqli_real_escape_string($conn, $_POST['no']);
        $pendaftaran = mysqli_real_escape_string($conn, $_POST['Pendaftaran']);
        $penutupan = mysqli_real_escape_string($conn, $_POST['penutupan']);
        $keterangan_barang = mysqli_real_escape_string($conn, $_POST['keterangan_barang']);
        
        // Step 4: SQL Query to insert data into "Form Lelang"
        $sql = "INSERT INTO form_add_lelang (no, pendaftaran, penutupan, keterangan_barang) 
                VALUES ('$no', '$pendaftaran', '$penutupan', '$keterangan_barang')";
    }

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
