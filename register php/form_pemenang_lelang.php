<?php
session_start();
include 'config.php';

$sql = "SELECT * FROM form_pemenang_lelang.php";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Korporasi Perusahaan</title>
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
    <link rel="stylesheet" href="indeks.css">
</head>
<body>
<div class="jumbotron">
        <h1>Pratama Galuh Perkasa</h1>
        <p>
          Your business goals are our priority
        </p>
      </div>

      <nav>
        <ul>
        <li>
            <a href="indeks_tamu.html">Home</a>
          </li>
          <li>
            <a href="lelang_terbuka.html">Lelang Terbuka</a>
          </li>
          <li>
            <a href="form_pemenang_lelang.php">Pengumuman Lelang</a>
          </li>
          <li>
            <a href="form_koorporasi_perusahaan.html">Sign In Account</a>
          </li>
        </ul>
      </nav>
    </header>
<form action="">
<div id="content">
    <div class="container">
        <h2>Pengumuman Pemenang Lelang</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perusahaan Pemenang</th>
                    <th>Keterangan Barang</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['perusahaan_pememnag']; ?></td>
                    <td><?php echo $row['barang']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
    </form>
    
</body>
</html>
<?php $conn->close(); ?>