<?php

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: <br>" . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}

?>