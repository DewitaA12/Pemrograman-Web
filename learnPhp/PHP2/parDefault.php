<?php
// Membuat fungsi
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo "$salam.<br/>";
    echo "Perkenalkan, nama saya $nama.<br/>";
    echo "Senang berkenalan dengan Anda.<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// Memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>
