<?php
$pa = 120000;
$discount = 0.2;

if ($pa > 100000){
    $bill = $pa - ($pa * $discount);
}

echo "Total harga bayar = $bill";
?>