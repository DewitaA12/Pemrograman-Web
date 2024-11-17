<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="POST">
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
    var nama = $("#nama").val();
    var email = $("#email").val();
    var valid = true;

    if (nama === "") {
      $("#nama-error").text("Nama harus diisi.");
      valid = false;
    } else {
      $("#nama-error").text("");
    }

    if (email === "") {
      $("#email-error").text("Email harus diisi.");
      valid = false;
    } else {
      $("#email-error").text("");
    }

    if (!valid) {
      event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
    }
  });
});
</script>

    <?php
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
            // Tampilkan pesan kesalahan di sini (misalnya, dengan menggunakan JavaScript untuk menampilkan alert)
            echo "<script>alert('" . implode(', ', $errors) . "');</script>";
        } else {
            // Data valid, tampilkan data
            echo "<h2>Data yang Anda Inputkan</h2>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Email: $email</p>";
        }
    }
    ?>
</body>
</html>