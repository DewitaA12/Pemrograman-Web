<?php
// Menyertakan file koneksi
include('connect.php');

// Memeriksa apakah ada parameter id yang diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data kontak berdasarkan ID
    $sql = "DELETE FROM kontak WHERE id = ?";
    $params = array($id);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        // Setelah berhasil dihapus, alihkan ke daftar kontak
        header("Location: daftar_kontak.php");
        exit();
    }
} else {
    echo "ID kontak tidak ditemukan.";
}
?>
