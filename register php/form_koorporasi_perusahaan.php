<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $nama_group_usaha = $_POST['nama_group_usaha'];
    $alamat_perusahaan = $_POST['alamat_perusahaan'];
    $formulir_aplikasi = $_POST['formulir_aplikasi'];
    $akta_perusahaan = $_POST['akta_perusahaan'];
    $akta_pengesahan_menhukam = $_POST['akta_pengesahan_menhukam'];
    $siup = $_POST['siup'];
    $ktp = $_POST['ktp'];
    $tdp = $_POST['tdp'];
    $sim = $_POST['sim'];
    $surat_keterangan_domisili = $_POST['surat_keterangan_domisili'];
    $paspor = $_POST['paspor'];
    $spt_terbaru = $_POST['spt_terbaru'];
    $company_profile = $_POST['company_profile'];
    $laporan_keuangan = $_POST['laporan_keuangan'];

    // Create connection
    $conn = new mysqli('localhost', 'username', 'password', 'user_management');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO form_koorporasi_perusahaan (nama_perusahaan, nama_pemilik, nama_group_usaha, alamat_perusahaan, formulir_aplikasi, akta_perusahaan, akta_pengesahan_menhukam, siup, ktp, tdp, sim, surat_keterangan_domisili, paspor, spt_terbaru, company_profile, laporan_keuangan)
    VALUES ('$nama_perusahaan', '$nama_pemilik', '$nama_group_usaha', '$alamat_perusahaan', '$formulir_aplikasi', '$akta_perusahaan', '$akta_pengesahan_menhukam', '$siup', '$ktp', '$tdp', '$sim', '$surat_keterangan_domisili', '$paspor', '$spt_terbaru', '$company_profile', '$laporan_keuangan')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


