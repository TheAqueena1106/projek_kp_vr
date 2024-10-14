<?php
session_start();
include 'config.php';

$sql = "SELECT * FROM form_koorporasi_perusahaan";
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
    </header>
<form action="">
<div id="content">
    <div class="container">
        <h2>Daftar Korporasi Perusahaan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Group Usaha</th>
                    <th>Alamat Perusahaan</th>
                    <th>Formulir Aplikasi</th>
                    <th>Akta Perusahaan</th>
                    <th>Akta Pengesahan Menhukam</th>
                    <th>SIUP</th>
                    <th>KTP</th>
                    <th>TDP</th>
                    <th>SIM</th>
                    <th>Surat Keterangan Domisili</th>
                    <th>Paspor</th>
                    <th>SPT Terbaru</th>
                    <th>Company Profile</th>
                    <th>Laporan Keuangan</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['nama_perusahaan']; ?></td>
                    <td><?php echo $row['nama_pemilik']; ?></td>
                    <td><?php echo $row['nama_group_usaha']; ?></td>
                    <td><?php echo $row['alamat_perusahaan']; ?></td>
                    <td><?php echo $row['formulir_aplikasi']; ?></td>
                    <td><?php echo $row['akta_perusahaan']; ?></td>
                    <td><?php echo $row['akta_pengesahan_menhukam']; ?></td>
                    <td><?php echo $row['siup']; ?></td>
                    <td><?php echo $row['ktp']; ?></td>
                    <td><?php echo $row['tdp']; ?></td>
                    <td><?php echo $row['sim']; ?></td>
                    <td><?php echo $row['surat_keterangan_domisili']; ?></td>
                    <td><?php echo $row['paspor']; ?></td>
                    <td><?php echo $row['spt_terbaru']; ?></td>
                    <td><?php echo $row['company_profile']; ?></td>
                    <td><?php echo $row['laporan_keuangan']; ?></td>
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
