
USE user_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE form_pengajuan_perusahaan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_terdaftar VARCHAR(255),
    group_holding VARCHAR(255),
    siup VARCHAR(255),
    alamat_terdaftar VARCHAR(255),
    nama_dagang VARCHAR(255),
    npwp_perusahaan VARCHAR(255),
    tdp VARCHAR(255),
    alamat_dagang VARCHAR(255),
    telpon_fax VARCHAR(255),
    kepemilikan_perusahaan ENUM('Milik Sendiri', 'Joint', 'Incorporasi', 'Lainnya'),
    type_perusahaan ENUM('PT', 'CV', 'UD', 'Lainnya'),
    type_industri_perusahaan ENUM('Supplier', 'Kontraktor', 'Trading', 'Jasa', 'Pemerintahan'),
    bidang_pekerjaan ENUM('Alat Berat', 'Mesin', 'Oli', 'Lainnya'),
    nama_direktur VARCHAR(255),
    alamat_direktur VARCHAR(255),
    no_telpon_direktur VARCHAR(255),
    omset_per_tahun DECIMAL(20,2),
    nama_supplier VARCHAR(255),
    presentase_supplier DECIMAL(5,2),
    syarat_pembayaran_supplier VARCHAR(255),
    nama_konsumen VARCHAR(255),
    presentase_konsumen DECIMAL(5,2),
    syarat_pembayaran_konsumen VARCHAR(255),
    nama_purchasing VARCHAR(255),
    kontak_purchasing VARCHAR(255),
    no_rekening VARCHAR(255),
    nama_bank VARCHAR(255),
    nama_rekening VARCHAR(255),
    cabang VARCHAR(255),
    limit_kredit DECIMAL(20,2),
    jangka_waktu VARCHAR(255),
    jatuh_tempo DATE,
    ketentuan_penalty VARCHAR(255)
);

CREATE TABLE form_koorporasi_perusahaan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_perusahaan VARCHAR(255),
    nama_pemilik VARCHAR(255),
    nama_group_usaha VARCHAR(255),
    alamat_perusahaan VARCHAR(255),
    formulir_aplikasi ENUM('Ada', 'Tidak Ada'),
    akta_perusahaan ENUM('Ada', 'Tidak Ada'),
    akta_pengesahan_menhukam ENUM('Ada', 'Tidak Ada'),
    siup ENUM('Ada', 'Tidak Ada'),
    ktp ENUM('Ada', 'Tidak Ada'),
    tdp ENUM('Ada', 'Tidak Ada'),
    sim ENUM('Ada', 'Tidak Ada'),
    surat_keterangan_domisili ENUM('Ada', 'Tidak Ada'),
    paspor ENUM('Ada', 'Tidak Ada'),
    spt_terbaru ENUM('Ada', 'Tidak Ada'),
    company_profile ENUM('Ada', 'Tidak Ada'),
    laporan_keuangan ENUM('Ada', 'Tidak Ada')
);

CREATE TABLE form_add_lelang (
    no INT AUTO_INCREMENT PRIMARY KEY,
    pendaftaran DATE,
    penutupan DATE,
    keterangan_barang TEXT
);


CREATE TABLE form_pemenang_lelang (
    perusahaan_pemenang VARCHAR(255),
    barang TEXT
);


CREATE TABLE daftar_lelang (
    nama_perusahaan VARCHAR(255),
    kontak VARCHAR(25),
    alamat VARCHAR(255),
    harga INT,
    metode_pembayaran ENUM('cash', 'tempo', 'transfer', 'lainnya')
);
