<?php
session_start();
include 'config.php';

$sql = "SELECT * FROM form_pengajuan_perusahaan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengajuan Perusahaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

    <div class="container">
        <h2>Daftar Pengajuan Perusahaan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Terdaftar</th>
                    <th>Group Holding</th>
                    <th>SIUP</th>
                    <th>Alamat Terdaftar</th>
                    <th>Nama Dagang</th>
                    <th>NPWP Perusahaan</th>
                    <th>TDP</th>
                    <th>Alamat Dagang</th>
                    <th>Telpon/Fax</th>
                    <th>Kepemilikan Perusahaan</th>
                    <th>Type Perusahaan</th>
                    <th>Type Industri Perusahaan</th>
                    <th>Bidang Pekerjaan</th>
                    <th>Nama Direktur</th>
                    <th>Alamat Direktur</th>
                    <th>No Telpon Direktur</th>
                    <th>Omset Per Tahun</th>
                    <th>Nama Supplier</th>
                    <th>Presentase Supplier</th>
                    <th>Syarat Pembayaran Supplier</th>
                    <th>Nama Konsumen</th>
                    <th>Presentase Konsumen</th>
                    <th>Syarat Pembayaran Konsumen</th>
                    <th>Nama Purchasing</th>
                    <th>Kontak Purchasing</th>
                    <th>No Rekening</th>
                    <th>Nama Bank</th>
                    <th>Nama Rekening</th>
                    <th>Cabang</th>
                    <th>Limit Kredit</th>
                    <th>Jangka Waktu</th>
                    <th>Jatuh Tempo</th>
                    <th>Ketentuan Penalty</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['nama_terdaftar']; ?></td>
                    <td><?php echo $row['group_holding']; ?></td>
                    <td><?php echo $row['siup']; ?></td>
                    <td><?php echo $row['alamat_terdaftar']; ?></td>
                    <td><?php echo $row['nama_dagang']; ?></td>
                    <td><?php echo $row['npwp_perusahaan']; ?></td>
                    <td><?php echo $row['tdp']; ?></td>
                    <td><?php echo $row['alamat_dagang']; ?></td>
                    <td><?php echo $row['telpon_fax']; ?></td>
                    <td><?php echo $row['kepemilikan_perusahaan']; ?></td>
                    <td><?php echo $row['type_perusahaan']; ?></td>
                    <td><?php echo $row['type_industri_perusahaan']; ?></td>
                    <td><?php echo $row['bidang_pekerjaan']; ?></td>
                    <td><?php echo $row['nama_direktur']; ?></td>
                    <td><?php echo $row['alamat_direktur']; ?></td>
                    <td><?php echo $row['no_telpon_direktur']; ?></td>
                    <td><?php echo $row['omset_per_tahun']; ?></td>
                    <td><?php echo $row['nama_supplier']; ?></td>
                    <td><?php echo $row['presentase_supplier']; ?></td>
                    <td><?php echo $row['syarat_pembayaran_supplier']; ?></td>
                    <td><?php echo $row['nama_konsumen']; ?></td>
                    <td><?php echo $row['presentase_konsumen']; ?></td>
                    <td><?php echo $row['syarat_pembayaran_konsumen']; ?></td>
                    <td><?php echo $row['nama_purchasing']; ?></td>
                    <td><?php echo $row['kontak_purchasing']; ?></td>
                    <td><?php echo $row['no_rekening']; ?></td>
                    <td><?php echo $row['nama_bank']; ?></td>
                    <td><?php echo $row['nama_rekening']; ?></td>
                    <td><?php echo $row['cabang']; ?></td>
                    <td><?php echo $row['limit_kredit']; ?></td>
                    <td><?php echo $row['jangka_waktu']; ?></td>
                    <td><?php echo $row['jatuh_tempo']; ?></td>
                    <td><?php echo $row['ketentuan_penalty']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php $conn->close(); ?>
