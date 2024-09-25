<?php 

// function perkenalan() {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Elok <br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// perkenalan();
// perkenalan();
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalumalaikum") {
    echo "$salam. ", "";
    echo "Perkenalkan, nama saya ". $nama ."<br/>";

    echo "Saya berusia ". hitungUmur(1988, 2023). "tahun <br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}

perkenalan ("Elok");

?>