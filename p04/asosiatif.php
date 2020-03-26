<?php

$umurKaryawan = array(
    "Mardi"=>"45", 
    "Chita"=>"28",
    "Dita"=>"26"
);

foreach($umurKaryawan as $nama => $umur) {
    echo "Nama = " . $nama . ", umur =" . $umur;
    echo "<br>";
}

$koleksiBuah = [
    "pasar minggu" => "durian",
    "lebak bulus" => "kecapi",
    "depok" => "belimbing"
];

echo "<h3>Buah-buahan khas Jabodetabek</h3>";
echo "<ul>";
foreach($koleksiBuah as $daerah => $namaBuah) {
    echo "<li>$daerah terkenal dengan buah $namaBuah</li>";
}
echo "</ul>";