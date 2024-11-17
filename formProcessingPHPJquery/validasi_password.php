<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="" id="myForm">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin: </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Kirim">
    </form>

    <div id="error-message" style="color: red;"></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];
        $selectedWarna = isset($_POST['warna']) ? $_POST['warna'] : [];
        $selectedJenisKelamin = $_POST['jenis_kelamin'];
        $password = $_POST['password'];

        // PHP Password Validation (Server-side)
        if (strlen($password) < 8) {
            echo "<p style='color:red;'>Password harus minimal 8 karakter.</p>";
        } else {
            echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";

            if (!empty($selectedWarna)) {
                echo "Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna)) . "<br>";
            } else {
                echo "Anda tidak memilih warna favorit.<br>";
            }

            echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin) . "<br>";
            echo "Password Anda: " . htmlspecialchars($password) . "<br>";  
        }
    }
    ?>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                // Clear previous error messages
                $("#error-message").html("");

                // Get password value
                var password = $("#password").val();

                // Check if password length is less than 8 characters
                if (password.length < 8) {
                    e.preventDefault(); // Prevent form submission
                    $("#error-message").html("Password harus minimal 8 karakter.");
                }
            });
        });
    </script>
</body>
</html>
