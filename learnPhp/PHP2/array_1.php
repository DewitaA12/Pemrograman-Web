<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
$Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

echo $Listdosen[2] . "<br>";
echo $Listdosen[0] . "<br>";
echo $Listdosen[1] . "<br>";

echo "<br> Cetak pakai perulangan : <br>";
for ($i = 0; $i < 3; $i++) {
    echo $Listdosen[$i] . "<br>";
}

?>
</body>
</html>