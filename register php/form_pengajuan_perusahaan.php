<?php
// Menyediakan koneksi ke database
$servername = "localhost"; // atau nama server database Anda
$username = "root"; // atau username database Anda
$password = ""; // atau password database Anda
$dbname = "user_management"; // nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama_terdaftar = isset($_POST['nama_terdaftar']) ? $_POST['nama_terdaftar'] : '';
$group_holding = isset($_POST['group_holding']) ? $_POST['group_holding'] : '';
$siup = isset($_POST['siup']) ? $_POST['siup'] : '';
$alamat_terdaftar = isset($_POST['alamat_terdaftar']) ? $_POST['alamat_terdaftar'] : '';
$nama_dagang = isset($_POST['nama_dagang']) ? $_POST['nama_dagang'] : '';
$npwp_perusahaan = isset($_POST['npwp_perusahaan']) ? $_POST['npwp_perusahaan'] : '';
$tdp = isset($_POST['tdp']) ? $_POST['tdp'] : '';
$alamat_dagang = isset($_POST['alamat_dagang']) ? $_POST['alamat_dagang'] : '';
$telpon_fax = isset($_POST['telpon_fax']) ? $_POST['telpon_fax'] : '';
$kepemilikan_perusahaan = isset($_POST['kepemilikan_perusahaan']) ? $_POST['kepemilikan_perusahaan'] : '';
$type_perusahaan = isset($_POST['type_perusahaan']) ? $_POST['type_perusahaan'] : '';
$type_industri_perusahaan = isset($_POST['type_industri_perusahaan']) ? $_POST['type_industri_perusahaan'] : '';
$bidang_pekerjaan = isset($_POST['bidang_pekerjaan']) ? $_POST['bidang_pekerjaan'] : '';
$nama_direktur = isset($_POST['nama_direktur']) ? $_POST['nama_direktur'] : '';
$alamat_direktur = isset($_POST['alamat_direktur']) ? $_POST['alamat_direktur'] : '';
$no_telpon_direktur = isset($_POST['no_telpon_direktur']) ? $_POST['no_telpon_direktur'] : '';
$omset_per_tahun = isset($_POST['omset_per_tahun']) ? $_POST['omset_per_tahun'] : '';
$nama_supplier = isset($_POST['nama_supplier']) ? $_POST['nama_supplier'] : '';
$presentase_supplier = isset($_POST['presentase_supplier']) ? $_POST['presentase_supplier'] : '';
$syarat_pembayaran_supplier = isset($_POST['syarat_pembayaran_supplier']) ? $_POST['syarat_pembayaran_supplier'] : '';
$nama_konsumen = isset($_POST['nama_konsumen']) ? $_POST['nama_konsumen'] : '';
$presentase_konsumen = isset($_POST['presentase_konsumen']) ? $_POST['presentase_konsumen'] : '';
$syarat_pembayaran_konsumen = isset($_POST['syarat_pembayaran_konsumen']) ? $_POST['syarat_pembayaran_konsumen'] : '';
$nama_purchasing = isset($_POST['nama_purchasing']) ? $_POST['nama_purchasing'] : '';
$kontak_purchasing = isset($_POST['kontak_purchasing']) ? $_POST['kontak_purchasing'] : '';
$no_rekening = isset($_POST['no_rekening']) ? $_POST['no_rekening'] : '';
$nama_bank = isset($_POST['nama_bank']) ? $_POST['nama_bank'] : '';
$nama_rekening = isset($_POST['nama_rekening']) ? $_POST['nama_rekening'] : '';
$cabang = isset($_POST['cabang']) ? $_POST['cabang'] : '';
$limit_kredit = isset($_POST['limit_kredit']) ? $_POST['limit_kredit'] : '';
$jangka_waktu = isset($_POST['jangka_waktu']) ? $_POST['jangka_waktu'] : '';
$jatuh_tempo = isset($_POST['jatuh_tempo']) ? $_POST['jatuh_tempo'] : '';
$ketentuan_penalty = isset($_POST['ketentuan_penalty']) ? $_POST['ketentuan_penalty'] : '';

// Query untuk memasukkan data ke tabel database
$sql = "INSERT INTO form_pengajuan_perusahaan (nama_terdaftar, group_holding, siup, alamat_terdaftar, nama_dagang, npwp_perusahaan, tdp, alamat_dagang, telpon_fax, kepemilikan_perusahaan, type_perusahaan, type_industri_perusahaan, bidang_pekerjaan, nama_direktur, alamat_direktur, no_telpon_direktur, omset_per_tahun, nama_supplier, presentase_supplier, syarat_pembayaran_supplier, nama_konsumen, presentase_konsumen, syarat_pembayaran_konsumen, nama_purchasing, kontak_purchasing, no_rekening, nama_bank, nama_rekening, cabang, limit_kredit, jangka_waktu, jatuh_tempo, ketentuan_penalty) 
VALUES ('$nama_terdaftar', '$group_holding', '$siup', '$alamat_terdaftar', '$nama_dagang', '$npwp_perusahaan', '$tdp', '$alamat_dagang', '$telpon_fax', '$kepemilikan_perusahaan', '$type_perusahaan', '$type_industri_perusahaan', '$bidang_pekerjaan', '$nama_direktur', '$alamat_direktur', '$no_telpon_direktur', '$omset_per_tahun', '$nama_supplier', '$presentase_supplier', '$syarat_pembayaran_supplier', '$nama_konsumen', '$presentase_konsumen', '$syarat_pembayaran_konsumen', '$nama_purchasing', '$kontak_purchasing', '$no_rekening', '$nama_bank', '$nama_rekening', '$cabang', '$limit_kredit', '$jangka_waktu', '$jatuh_tempo', '$ketentuan_penalty')";

// Mengecek apakah query berhasil dijalankan
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Menutup koneksi
$conn->close();
?>
