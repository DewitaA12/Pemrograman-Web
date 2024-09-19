<?php
$numericValue = 92;

if ($numericValue >= 90 && $numericValue <= 100) {
    echo "Nilai huruf: A";
} elseif ($numericValue >= 80 && $numericValue < 90) {
    echo "Nilai huruf: B";
} elseif ($numericValue >= 70 && $numericValue < 80) {
    echo "Nilai huruf: C";
} elseif ($numericValue < 70) {
    echo "Nilai huruf: D";
}

$currentDistance = 0;
$targetDistance = 500;
$dailyIncrease = 30;
$day = 0;

while ($currentDistance < $targetDistance) {
    $currentDistance += $dailyIncrease;
    $day++;
}

echo "<br>";
echo "Atlet tersebut memerlukan $day  hari untuk mencapai jarak 500 kilometer.";

$totalLand = 10;
$plantPerLand = 5;
$fruitPerPlant = 10;
$totalFruit = 0;

for ($i = 1; $i <= $totalLand; $i++) {
    $totalFruit += ($plantPerLand * $fruitPerPlant);
}

echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $totalFruit";

$examScore = [85, 92, 78, 96, 88];
$totalScore = 0;

foreach ($examScore as $score) {
    $totalScore += $score;
}

echo "<br> Total exam score : $totalScore <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
?>