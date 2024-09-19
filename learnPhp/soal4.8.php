<?php
$poin = 450;

$comparison = $poin > 500;

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapat hadiah tambahan? " . ($comparison ? "YA" : "TIDAK") . "<br>";