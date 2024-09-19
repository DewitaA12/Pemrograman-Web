<?php
//SOAL 5.1
// Daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// Array untuk menyimpan nilai yang lulus
$nilaiLulus = [];

// Memeriksa setiap nilai siswa
foreach ($nilaiSiswa as $nilai) {
    // Cek jika nilai >= 70
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai; // Tambahkan nilai lulus ke array
    }
}

// Tampilkan daftar nilai siswa yang lulus
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo "<br><br>";
//SOAL 5.2
// Daftar karyawan dan pengalaman
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

// Array untuk karyawan dengan pengalaman > 5 tahun
$karyawanPengalamanLimaTahun = [];

// Memeriksa setiap karyawan
foreach ($daftarKaryawan as $karyawan) {
    // Tambahkan jika pengalaman > 5
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

// Tampilkan daftar karyawan dengan pengalaman kerja lebih dari 5 tahun
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";
//SOAL 5.3
// Daftar nilai mahasiswa berdasarkan mata kuliah
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

// Menentukan mata kuliah yang akan ditampilkan
$mataKuliah = 'Fisika';

// Menampilkan judul daftar nilai untuk mata kuliah yang dipilih
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah:<br>";

// Mengiterasi dan menampilkan nilai mahasiswa untuk mata kuliah yang dipilih
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: " . $nilai[0] . ", Nilai: " . $nilai[1] . "<br>";
}

echo "<br><br>";
//SOAL 5.3
// Data nilai siswa
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Menghitung total dan jumlah siswa
$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

// Menghitung total nilai
foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
}

// Menghitung rata-rata kelas
$nilaiRataRata = $totalNilai / $jumlahSiswa;

// Menampilkan nilai rata-rata
echo "Rata-rata nilai kelas: " . $nilaiRataRata . "<br>";

// Menampilkan daftar siswa yang memiliki nilai di atas rata-rata
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $nilaiRataRata) {
        echo "Nama: " . $nilai[0] . ", Nilai: " . $nilai[1] . "<br>";
    }
}
?>