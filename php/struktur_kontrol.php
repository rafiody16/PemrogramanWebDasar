<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai target 500 km. <br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br><br>";

// foreach ($nilaiSiswa as $nilai) {
//     if ($nilai < 60) {
//         echo "Nilai: $nilai (Tidak Lulus)<br>";
//         continue;
//     }
//     echo "Nilai: $nilai (Lulus)<br>";
// }
echo "<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiMax = max($nilaiSiswa);
$nilaiMin = min($nilaiSiswa);

$nilai = array_diff($nilaiSiswa, [$nilaiMax, $nilaiMin]);

$rata2 = array_sum($nilai)/count($nilai);

echo "Rata-rata mengabaikan nilai tertinggi & rendah: ". round($rata2, 2) ."<br>";
echo "<br><br>";

$hargaBayar = 120000;
$diskon = 0.2;
$bayar = $hargaBayar - ($hargaBayar * $diskon);
echo "Bayar (diskon 20%): " . $bayar;
echo "<br><br>";

$poin = 520;
$hadiah = ($poin > 500) ? 'YA' : 'TIDAK';

echo "Total skor pemain adalah: {$poin} <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiah}";

?>