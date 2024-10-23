<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking</title>
    <link rel="stylesheet" href="style.css">
    
    
    <script>
        function validateForm() {
        const name = document.forms["bookingForm"]["name"].value;
        const email = document.forms["bookingForm"]["email"].value;
        
        if (name === "" || email === "") {
            alert("Nama dan Email harus diisi."); // Ini gak muncul knp ya
            return false;
        }

        alert("Data berhasil disubmit!"); // Pop-up ini bisa
        return true;
}
    </script>
    
</head>
<body class="formbook">
<header>
        <img src="image/logo.png" alt="Logo Photo Studio" class="logo">
        <div class="nav-container">
        <nav>
            <a href="index.php">Home</a>
            <a href="pricelist.php">Pricelist</a>
            <a href="form_pemesanan.php">Booking</a>
        </div>
        </nav>
    </header>

    <main>
        <form name="bookingForm" action="terimakasih.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Waktu:</label>
                <input type="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="package">Pilih Paket:</label>
                <select name="package">
                    <option value="weekdays">Weekdays</option>
                    <option value="weekend">Weekend</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <input type="submit" value="Pesan">
        </form>
    </main>
    <footer>
    <p class="footer">&copy; 2024 Heaven Studio</p>
    </footer>
</body>
</html>
