<?php
// deklarasi array
$buah = array("Mangga", "Kecapi", "Kedondong", "Cipedak", "Durian");
$minuman = ["bajigur", "bir pletok", "tuak", "sekoteng"];
$data = ["Nama", 123, 232.232, "Karakter Bebas"];

$dosen[0] = "Febry Maspiyanti";
$dosen[1] = "Desti Fitriati";
$dosen[2] = "Bambang Riono";
$dosen[3] = "Gregorius Hendita";
$dosen[4] = "Bambang Haryanto";

// menampilkan array
echo $dosen[0] . "<br>";
echo $dosen[1] . "<br>";
echo $dosen[2] . "<br>";
echo $dosen[3] . "<br>";
echo $dosen[4] . "<br>";

// menampilkan dengan for()
echo "<h3>Menampilkan data dosen</h3>";
for($i = 0; $i < count($dosen); $i++) {
    echo "Dosen ke-$i: $dosen[$i]<br>";
    // echo 'Dosen ke-' . $i . ': ' . $dosen[$i]. '<br>';
}

// menampilkan dengan foreach
echo "<h3>Menampilkan data buah-buahan</h3>";
foreach($buah as $namaBuah) {
    echo "$namaBuah<br>";
}

echo "<h3>Minuman Khas Indonesia</h3>";
echo "<ul>";
foreach($minuman as $namaMinuman) {
    echo "<li>$namaMinuman</li>";
}
echo "</ul>";