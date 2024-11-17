<?php
// Menyertakan file koneksi untuk menghubungkan dengan database
include('connect.php');

// Mengambil data kontak dari tabel "kontak" di database
$sql = "SELECT * FROM kontak";
$result = sqlsrv_query($conn, $sql);

// Memeriksa apakah query berhasil dijalankan
if ($result === false) {
    die(print_r(sqlsrv_errors(), true));  // Jika gagal, tampilkan pesan error
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <!-- Menentukan karakter encoding untuk halaman -->
    <title>Daftar Kontak</title>
    <style>
        /* Mengatur font dan latar belakang halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2 {
            text-align: center;  /* Mengatur judul halaman agar berada di tengah */
        }

        /* Kontainer utama untuk tabel dan form */
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 0 auto;
        }

        /* Styling untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #007BFF; /* Warna latar belakang untuk header tabel */
            color: white;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang untuk baris genap */
        }
        table tr:hover {
            background-color: #ddd; /* Warna latar belakang saat baris di-hover */
        }

        /* Styling untuk tombol (edit, delete, cancel) */
        button {
            padding: 6px 12px;
            margin: 5px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        button.edit-btn {
            background-color: #007BFF; /* Tombol Edit dengan warna biru */
        }
        button.edit-btn:hover {
            background-color: #0056b3; /* Tombol Edit berubah warna saat di-hover */
        }

        button.delete-btn {
            background-color: #dc3545; /* Tombol Hapus dengan warna merah */
        }
        button.delete-btn:hover {
            background-color: #c82333; /* Tombol Hapus berubah warna saat di-hover */
        }

        button.cancel-btn {
            background-color: #dc3545; /* Tombol Cancel dengan warna merah */
        }
        button.cancel-btn:hover {
            background-color: #c82333; /* Tombol Cancel berubah warna saat di-hover */
        }

        button.save-btn {
            background-color:#28a745; /* Tombol Simpan dengan warna hijau */
        }
        button.save-btn:hover {
            background-color: #28a600; /* Tombol Simpan berubah warna saat di-hover */
        }

        /* Styling untuk form edit */
        #editForm {
            display: none;  /* Form edit disembunyikan saat pertama kali */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        #editForm input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Link Tambah Kontak Baru */
        a {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
        }
        a:hover {
            background-color: #218838; /* Warna berubah saat link di-hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Kontak</h2>
        <!-- Link untuk menambah kontak baru -->
        <a href="tambah_kontak.php">Tambah Kontak Baru</a><br><br>

        <?php if (sqlsrv_has_rows($result)): ?>
            <!-- Menampilkan tabel jika data kontak ada -->
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor HP</th>
                    <th>Aksi</th>
                </tr>
                <?php while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)): ?>
                    <!-- Menampilkan setiap baris data kontak -->
                    <tr id="row_<?= $row['id'] ?>">
                        <td><?= $row['id'] ?></td>
                        <td id="nama_<?= $row['id'] ?>"><?= $row['nama'] ?></td>
                        <td id="nomor_hp_<?= $row['id'] ?>"><?= $row['nomor_hp'] ?></td>
                        <td>
                            <!-- Tombol Edit dan Hapus -->
                            <button class="edit-btn" onclick="editRow(<?= $row['id'] ?>)">Edit</button>
                            <button class="delete-btn" onclick="deleteRow(<?= $row['id'] ?>)">Hapus</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <!-- Menampilkan pesan jika tidak ada data kontak -->
            <p>Tidak ada data kontak.</p>
        <?php endif; ?>

        <!-- Form Edit Kontak (disembunyikan awalnya) -->
        <div id="editForm">
            <h3>Edit Kontak</h3>
            <form method="POST" action="update_kontak.php">
                <input type="hidden" id="edit_id" name="id"> <!-- Menyimpan ID yang akan diedit -->
                <label for="edit_nama">Nama:</label>
                <input type="text" id="edit_nama" name="nama" required><br><br>
                <label for="edit_nomor_hp">Nomor HP:</label>
                <input type="text" id="edit_nomor_hp" name="nomor_hp" required><br><br>
                <button class="save-btn" type="submit">Simpan Perubahan</button>
                <button class="cancel-btn" type="button" onclick="cancelEdit()">Batal</button>
            </form>
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan form edit dengan data yang sudah diisi
        function editRow(id) {
            document.getElementById('editForm').style.display = 'block';  // Menampilkan form
            document.getElementById('edit_id').value = id;  // Menyimpan ID kontak
            document.getElementById('edit_nama').value = document.getElementById('nama_' + id).innerText;  // Menyimpan nama
            document.getElementById('edit_nomor_hp').value = document.getElementById('nomor_hp_' + id).innerText;  // Menyimpan nomor HP
        }

        // Fungsi untuk membatalkan dan menyembunyikan form edit
        function cancelEdit() {
            document.getElementById('editForm').style.display = 'none';  // Menyembunyikan form
        }

        // Fungsi untuk menghapus kontak setelah konfirmasi
        function deleteRow(id) {
            if (confirm("Apakah Anda yakin ingin menghapus kontak ini?")) {
                // Jika pengguna mengkonfirmasi, mengarahkan ke halaman penghapusan
                window.location.href = 'delete_kontak.php?id=' + id;
            }
        }
    </script>
</body>
</html>

<?php
// Menutup koneksi ke database
sqlsrv_close($conn);
?>
