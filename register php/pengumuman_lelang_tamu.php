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

// Step 2: Fetch data from the 'pemenang_lelang' table
$sql = "SELECT perusahaan_pemenang, informasi_barang FROM form_pemenang_lelang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pengumuman Pemenang Lelang</title>
    <link rel="stylesheet" href="indeks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
    rel="stylesheet"
  />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <header>
    <div class="jumbotron">
      <h1>Pratama Galuh Perkasa</h1>
    </div>
    <nav>
        <ul>
          <li>
            <a href="indeks_tamu.html">Home</a>
          </li>
          <li>
            <a href="lelang_terbuka_tamu.php">Lelang Terbuka</a> <!--data dari add_lelang.html ditampilkan-->
          </li>
          <li>
            <a href="daftar_lelang.html">Daftar Lelang Terbuka</a>
          </li>
          <li>
            <a href="pengumuman_lelang_tamu.php">Pengumuman Lelang</a>
          </li>
          <li>
            <a href="register.html">Sign In Account</a>
          </li>
        </ul>
        </ul>
      </nav>
  </header>

  <main>
    <div class="container">
      <h2>Daftar Pemenang Lelang</h2>

      <!-- Step 3: Display the data in a table -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Perusahaan Pemenang</th>
            <th>Informasi Barang</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Step 4: Loop through the result and display each row
          if ($result) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row['perusahaan_pemenang'] . "</td>
                          <td>" . $row['informasi_barang'] . "</td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='3'>No data found</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer>
    <p>Kuliah Praktek &#169; ITERA</p>
  </footer>

  <?php
  // Step 5: Close the database connection
  $conn->close();
  ?>
</body>
</html>
