<?php
include "koneksi.php";

$e = isset($_GET['e']) ? $_GET['e'] : '';
$title = "Tambah User";
$data = [];

if (!empty($e)) {
    $title = "Edit User";
    $username = $_GET['username'];
    $result = $conn->query("SELECT * FROM user WHERE username = '$username'");

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <form method="post" action="Lat5_3.php">
        <input type="hidden" name="e" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>" />
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input name="username" type="text" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input name="password" type="text" value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>" /></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input name="level" type="text" value="<?php echo isset($data['level']) ? $data['level'] : ''; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
