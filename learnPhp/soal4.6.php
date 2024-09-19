<?php
$jumlahSiswa = 10;
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

//Total
$total = array_sum($nilaiSiswa);

// Total average before
$rataRata = $total / count($nilaiSiswa);

// Display result
echo "Rata-rata = $rataRata <br>";

// Sort ASC
sort($nilaiSiswa);

// Remove 2 lowest 2 highest scores
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);

// Total
$total = array_sum($nilaiSiswa);

// Total average
$rataRata = $total / count($nilaiSiswa);

// Display result
echo "Rata-rata = $rataRata";
?>
