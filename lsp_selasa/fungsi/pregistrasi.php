<?php 
session_start();
include('../config/db.php');

// Ambil data dari form
$NIS      = $_POST['NIS'];
$nama     = $_POST['nama'];
$jurusan  = $_POST['jurusan'];
$alamat   = $_POST['alamat'];

// Cek apakah NIS sudah terdaftar
$cek = "SELECT * FROM siswa WHERE NIS = '$NIS'";
$proses = $conn->query($cek);
$banyak = $proses->num_rows;

if ($banyak >= 1) {
    header('Location: ../tambah_siswa.php?gagal=NIS_sudah_terdaftar');
    exit;
} else {
    // Simpan data ke tabel siswa
    $sql = "INSERT INTO siswa (NIS, nama, jurusan, alamat) 
            VALUES ('$NIS', '$nama', '$jurusan', '$alamat')";
    $aksi = $conn->query($sql);

    if ($aksi === true) {
        header("Location: ../dashboard.php?sukses=Data_Berhasil_Ditambahkan");
        exit;
    } else {
        header("Location: ../tambah_siswa.php?gagal=Gagal_menyimpan_data");
        exit;
    }
}
?>
