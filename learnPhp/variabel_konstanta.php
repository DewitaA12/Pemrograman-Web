<?php
// Inisialisasi variabel angka
$angka1 = 10; // Nilai pertama
$angka2 = 5;  // Nilai kedua

// Melakukan penjumlahan dan menyimpan hasilnya
$hasil = $angka1 + $angka2;

// Menampilkan hasil penjumlahan
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. ";

// Inisialisasi variabel boolean
$benar = true; // Variabel yang menyatakan benar
$salah = false; // Variabel yang menyatakan salah

// Menampilkan nilai variabel boolean
echo "Variabel benar: $benar, Variabel salah: $salah ";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com"); // Konstanta untuk nama situs
define("TAHUN_PENDIRIAN", 2023); // Konstanta untuk tahun pendirian

// Menampilkan pesan selamat datang dengan menggunakan konstanta
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>
