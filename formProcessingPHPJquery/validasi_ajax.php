<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi AJAX</h1>
    <form id="myForm" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                validateForm();
            });

            function validateForm() {
                var nama = $("#nama").val();
                var email = $("#email").val();

                $.ajax({
                    url: "proses_validasi.php",
                    method: "POST",
                    data: { nama: nama, email: email },
                    success: function(response) {
                        alert(response);
                    }
                });

                return false;
            }
        });
    </script>

    <?php
    // proses_validasi.php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];

        $errors = [];

        // Validasi Nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }

        // Validasi Email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }

        // Jika ada kesalahan validasi
        if (!empty($errors)) {
            echo implode(', ', $errors);
        } else {
            // Data valid, tampilkan pesan sukses (misalnya, simpan ke database)
            echo "Data berhasil disimpan!";
        }
    }
    ?>
</body>
</html>