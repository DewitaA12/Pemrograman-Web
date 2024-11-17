<?php
//Mencari huruf keci a-z
$pattern = '/[a-z]/'; // Pola regex untuk mencari huruf kecil
$text = 'This is a Sample Text.'; // Teks yang akan dicari

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil";
}


//Mencari angka
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Angka ditemukan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

//Mengganti pola yang ada dengan preg_replace
$pattern = '/apple/';
$replacement = 'banana';
$text = '<br>I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie."

//Mencocokkan kata dengan awalan , tengah dan akhiran tertentu
$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>