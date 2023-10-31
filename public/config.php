<?php
session_start();
$host = "127.0.0.1"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "semada"; // Ganti dengan nama database Anda

try {
    // Membuat koneksi
    $koneksi = new mysqli($host, $username, $password, $database);

    // Periksa koneksi
    if ($koneksi->connect_error) {
        throw new Exception("Connection Error : " . $koneksi->connect_error);
    }

    // Koneksi database sukses
    echo "Connection Success!";

    // Sekarang Anda dapat menjalankan kueri SQL di sini

    // Tutup koneksi saat selesai
    $koneksi->close();
} catch (Exception $e) {
    // Tangani pengecualian
    echo "Found Error at :" . $e->getMessage();
}
?>

