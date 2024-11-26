<?php
include "koneksi.php";

// Ambil data dari form login
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Periksa apakah input kosong
if (empty($username) || empty($password)) {
    die("Username dan password harus diisi!");
}

// Gunakan prepared statement untuk memanggil stored procedure
$stmt = $conn->prepare("CALL SP_Login(?, ?)");
$stmt->bind_param('ss', $username, $password);

// Eksekusi statement
if ($stmt->execute()) {
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Jika login berhasil
        echo "Login berhasil!";
        header("Location: Lat5_1.php"); // Redirect ke halaman utama
    } else {
        // Jika login gagal
        echo "Login gagal! Username atau password salah.";
    }
} else {
    // Tampilkan error jika query gagal
    die("Error: " . $conn->error);
}

// Tutup statement dan koneksi
$stmt->close();
$conn->close();
?>
