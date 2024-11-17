<!DOCTYPE html>
<html>
<head>
    <title>Formulir Aman</title>
</head>
<body>
    <form method="POST" action="html_aman.php">
        <label for="input">Email:</label>
        <input type="text" name="input" id="input">
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Jika data sudah dikirim
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST['input'];
        //sanitasi
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        //validasi email
        if (!empty($input)) {
        if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Alamat email $input valid.</p>";
        } else {
            echo "<p>Alamat email tidak valid.</p>";
        }
    }
    }
    ?>
</body>
</html>