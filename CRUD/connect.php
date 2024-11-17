<?php
// Nama server SQL dan nama database
$serverName = "DESKTOP-6MN37MN\BDL";  // Nama server SQL
$databaseName = "CRUD";  // Nama database yang akan diakses

// Mencoba untuk menghubungkan ke database
$conn = sqlsrv_connect($serverName, [
    "Database" => $databaseName,  // Menentukan database yang akan diakses
]);

// Mengecek apakah koneksi berhasil atau tidak
if ($conn) {
    echo "Koneksi berhasil!";  // Jika berhasil, tampilkan pesan sukses
} else {
    echo "Koneksi gagal";  // Jika gagal, tampilkan pesan error
}
?>
