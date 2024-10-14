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
    $harga = mysqli_real_escape_string($conn, $_POST['harga']); // Using 'harga'
    $metode_pembayaran = mysqli_real_escape_string($conn, $_POST['metode_pembayaran']);

    // Step 4: SQL Query to insert data
    $sql = "INSERT INTO daftar_lelang (nama_perusahaan, kontak, alamat, harga, metode_pembayaran) 
            VALUES ('$nama_perusahaan', '$kontak', '$alamat', '$harga', '$metode_pembayaran')";

    // Step 5: Execute the query and provide feedback
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Data has been saved successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

// Step 7: Fetch the data to display
$sql = "SELECT * FROM daftar_lelang";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lelang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0
,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  />

  <meta charset="utf-8" />
  <title>E-procurement</title>
  <link rel="stylesheet" href="indeks.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
  rel="stylesheet"
/>
</head>
<body>
    <header> <header>
      <div class="jumbotron">
        <h1>Pratama Galuh Perkasa</h1>
        <p>Your business goals are our priority</p>
      </div>

      <nav>
        <ul>
          <li>
            <a href="indeks_admin.html">Home</a>
          </li>
          <li>
            <a href="add_lelang.html">Lelang</a>
          </li>
          <li>
            <a href="daftar_lelang_display_admin.php">Daftar Lelang</a> <!--tampilkan data dari daftar lelang tamu-->
          </li>
          <li>
            <a href="list_koorporasi.php">Data Koorporasi Perusahaan</a>
          </li>
          <li>
            <a href="list_pengajuan.php">Data Pengajuan Perusahaan</a>
          </li>
        </ul>
      </nav>
    </header></header>
    <div class="container mt-4">
        <h2>Daftar Lelang</h2>
        
        <!-- Display the data in a table -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                    <th>Harga</th>
                    <th>Metode Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Step 8: Loop through the result and display each row
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['nama_perusahaan'] . "</td>
                                <td>" . $row['kontak'] . "</td>
                                <td>" . $row['alamat'] . "</td>
                                <td>" . $row['harga'] . "</td>
                                <td>" . $row['metode_pembayaran'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Step 9: Close the database connection
    $conn->close();
    ?>
</body>
</html>
