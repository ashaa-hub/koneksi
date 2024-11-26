<?php
$namahost = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "praktikumWeb"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($namahost, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
