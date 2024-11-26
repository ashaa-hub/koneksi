<?php
include "koneksi.php";

$e = isset($_POST['e']) ? $_POST['e'] : '';
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if (empty($e)) {
    // Tambah user baru
    $conn->query("INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')");
} else {
    // Edit user
    $conn->query("UPDATE user SET password = '$password', level = '$level' WHERE username = '$username'");
}

header("Location: Lat5_1.php");
?>
