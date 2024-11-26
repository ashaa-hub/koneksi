<?php
include "koneksi.php";

// Query untuk mengambil data user
$result = $conn->query("SELECT * FROM user");

echo "<h1>Data User</h1>";
echo "<form action='Lat5_2.php' method='POST'>
        <input type='submit' value='Tambah User' />
      </form>";

echo "<table border='1'>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['username']}</td>
            <td>{$row['password']}</td>
            <td>{$row['level']}</td>
            <td><a href='Lat5_2.php?username={$row['username']}&e=1'>Edit</a></td>
          </tr>";
}
echo "</table>";
?>
