<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = $_POST['jumlah'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    echo "<h1>Data yang Dikirim</h1>";
    echo "<table border='1'>";
    echo "<tr><th>No</th><th>Nama</th><th>NIM</th></tr>";

    for ($i = 0; $i < $jumlah; $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>" . htmlspecialchars($nama[$i]) . "</td>";
        echo "<td>" . htmlspecialchars($nim[$i]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
