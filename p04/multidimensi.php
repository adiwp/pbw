<?php

$kantor = array(
    "Jakarta" => array(
        "Pimpinan" => "Haryanto",
        "Alamat" => "Jl. Lenteng Agung Raya",
    ),
    "Bandung" => array(
        "Pimpinan" => "Suparna",
        "Alamat" => "Jl. Dago Raya"
    ),
    "Semarang" => array(
        "Pimpinan" => "Wiyono",
        "Alamat" => "Jl. Srondol"
    ),
    "Jogjakarta" => array(
        "Pimpinan" => "Hadi Mulyo",
        "Alamat" => "Jl. Ngampilan Kulon"
    ),
    "Surabaya" => array(
        "Pimpinan" => "Isharini",
        "Alamat" => "Jl. Bung Tomo"
    )
);

echo "<ul>";
foreach($kantor as $cabang => $info) {
    echo "<li>Kantor cabang $cabang";
    echo "<ul>";
    foreach($info as $detil => $nilai) {
        echo "<li>$detil : $nilai </li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";