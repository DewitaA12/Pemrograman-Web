<?php
// Menyertakan file koneksi
include('connect.php');

// Mengecek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nomor_hp = $_POST['nomor_hp'];

    // Memastikan data tidak kosong
    if (empty($nama) || empty($nomor_hp)) {
        echo "Nama dan nomor HP harus diisi!";
    } else {
        // Menyimpan data ke database menggunakan query INSERT
        $sql = "INSERT INTO kontak (nama, nomor_hp) VALUES (?, ?)";
        $params = array($nama, $nomor_hp);

        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            header("Location: daftar_kontak.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kontak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .main-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 0 auto;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container {
            width: 100%;
            text-align: left; /* Mengatur agar form di-ratakan ke kiri */
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="main-container">
    <h2>Tambah Kontak</h2>
    <div class="form-container">
        <form method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br>

            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" name="nomor_hp" id="nomor_hp" required><br>

            <button type="submit">Simpan Kontak</button>
        </form>
    </div>
    <br>
    <a href="daftar_kontak.php">Lihat Daftar Kontak</a>
</div>

</body>
</html>
