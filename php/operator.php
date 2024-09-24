<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "$a + $b = {$hasilTambah} <br> $a - $b = {$hasilKurang} <br> $a * $b = {$hasilKali} <br>
$a / $b = {$hasilBagi} <br> $a % $b = {$sisaBagi} <br> $a ** $b = {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;


echo "Hasil Sama: " . var_export($hasilSama, true) . "<br> Hasil Tidak Sama: " . var_export($hasilTidakSama, true) . "<br> Hasil Lebih Kecil: "
. var_export($hasilLebihKecil, true) . "<br> Hasil Lebih Besar: " . var_export($hasilLebihBesar, true) . "<br> Hasil Lebih Kecil Sama: " . 
var_export($hasilLebihKecilSama, true) . "<br> Hasil Lebih Besar Sama: " . var_export($hasilLebihBesarSama, true) . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br>Hasil variabel a: {$a}";

$hasilIdentik = $a === $b;
$tidakIdentik = $a !== $b;

echo "<br>Hasil Identik: " . var_export($hasilIdentik, true) . "<br>Hasil Tidak Identik: " . var_export($tidakIdentik, true);

echo"<br><br>";

$kursiKosong = 45 - 28;
$presentaseKursi = ($kursiKosong / 45) * 100;
$bulat = round($presentaseKursi, 2);
echo "Total Kursi: 45 | Kursi Terisi: 28<br>";
echo "Presentase Kursi Kosong: {$bulat}%";

?>