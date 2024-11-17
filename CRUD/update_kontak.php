<?php
// Menyertakan file koneksi
include('connect.php');

// Mengecek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];

    // Memastikan data tidak kosong
    if (empty($nama) || empty($nomor_hp)) {
        echo "Nama dan nomor HP harus diisi!";
    } else {
        // Menyimpan data ke database menggunakan query UPDATE
        $sql = "UPDATE kontak SET nama = ?, nomor_hp = ? WHERE id = ?";
        $params = array($nama, $nomor_hp, $id);

        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            // Setelah berhasil diupdate, alihkan ke daftar kontak
            header("Location: daftar_kontak.php");
            exit();
        }
    }
}
?>

