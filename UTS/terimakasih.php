<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $package = $_POST['package'];
    $name = $_POST['name'];
    $email = $_POST['email'];
} else {
    header("Location: form_pemesanan.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
        <h2>Terima Kasih!</h2>
        <p>Pemesanan Anda berhasil.</p>
        <p>Detail Pemesanan:</p>
        <ul>
            <li>Tanggal: <?php echo $date; ?></li>
            <li>Waktu: <?php echo $time; ?></li>
            <li>Paket: <?php echo $package; ?></li>
            <li>Nama: <?php echo $name; ?></li>
            <li>Email: <?php echo $email; ?></li>
        </ul>
        <br><br>
        <p>Jangann Lupa Untuk Hadir Tepat Waktu! <br>
           Terlambat akan dikenakan extra charge Rp 5000/10 menit <br>
           </p>

        <p class="warning">Mohon konfirmasi apabila tidak jadi booking!</p><br><br>
        <h2>Contact</h2>
        <p>Phone : 085735522908</p>
        <p>Email : heavenstudio@gmail.com</p>
    </main><br><br>

    

    <footer>
    <p class="footer">&copy; 2024 Heaven Studio</p>
    </footer>
</body>
</html>
