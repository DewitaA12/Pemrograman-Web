<?php
$a = 10;
$b = 5;

$addResult = $a + $b;
$sbstrcResult = $a - $b;
$mltplcResult = $a * $b;
$divResult = $a / $b;
$mod = $a % $b;
$exponen = $a ** $b;

echo "$a + $b = $addResult <br>";
echo "$a - $b = $sbstrcResult <br>";
echo "$a x $b = $mltplcResult <br>";
echo "$a : $b = $divResult <br>"; 
echo "$a % $b = $mod <br>";
echo "$a ^ $b = $exponen <br>";

$sameResult = $a == $b;
$diffResult = $a != $b;
$lessResult = $a < $b;
$moreResult = $a > $b;
$lessEqualResult = $a <= $b;
$moreEqualResult = $a >= $b;

echo"<br>";
echo "Apakah $a sama dengan $b? " . ($sameResult ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a tidak sama dengan $b? " . ($diffResult ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil dari $b? " . ($lessResult ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar dari $b? " . ($moreResult ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil atau sama dengan $b? " . ($lessEqualResult ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar atau sama dengan $b? " . ($moreEqualResult ? "Ya" : "Tidak") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo"<br>";
echo "Hasil AND = $hasilAnd <br>";
echo "Hasil OR = $hasilOr <br>";
echo "Hasil Not A = $hasilNotA <br>";
echo "Hasil Not B = $hasilNotB <br>"; 

$a = 10;
echo"<br>";
$a += $b;
echo "10 + $b = $a <br>";
$a -= $b;
echo "10 - $b = $a <br>";
$a *= $b;
echo "10 x $b = $a <br>";
$a /= $b;
echo "10 : $b = $a <br>"; 
$a %= $b;
echo "10 % $b = $a <br>";




$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo"<br>";
echo "Hasil Identik = $hasilIdentik <br>";
echo "Hasil Tidak Identik = $hasilTidakIdentik <br>";

$kursi = 45;
$used = 28;
$percentageEmptyChair = ($kursi-$used)/$kursi*100;
echo "<br>";
echo "Persentase kursi kosong = $percentageEmptyChair %";