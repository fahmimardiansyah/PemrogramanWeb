<?php
$a = 10;
$b = 5;

// operasi aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// hasil operasi aritmatika
echo "Penjumlahan: " .$hasilTambah. "<br>";
echo "Pengurangan: " .$hasilKurang. "<br>";
echo "Perkalian: " .$hasilKali. "<br>";
echo "Pembagian: " .$hasilBagi. "<br>";
echo "Sisa Pembagian: " .$sisaBagi. "<br>";
echo "Perpangkatan: " .$pangkat. "<br>";
echo "<br>";

// operasi pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $b < $a;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $b <= $a;

// hasil opearasi pembanding
echo "Sama dengan: " .$hasilTambah. "<br>";
echo "Tidak Sama dengan: " .$hasilTambah. "<br>";
echo "Lebih Kecil: " .$hasilKurang. "<br>";
echo "Lebih Besar: " .$hasilKali. "<br>";
echo "Lebih Kecil Sama Dengan: " .$hasilBagi. "<br>";
echo "Lebih Besar Sama Dengan: " .$sisaBagi. "<br>";
echo "<br>";

// Operasi Logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menampilkan Hasil Operasi Logika
echo "Hasil and = {$hasilAnd} <br>";
echo "Hasil or = {$hasilOr} <br>";
echo "Hasil not A = {$hasilNotA} <br>";
echo "Hasil not B = {$hasilNotB} <br>";
echo "<br>";

// Operasi Penugasan
$penjumlahan = $a += $b;
$pengurangan = $a -= $b;
$perkalian = $a *= $b;
$pembagian = $a /= $b;
$modulo = $a %= $b;

// Menampilkan Hasil Operasi Penugasan
echo "{$penjumlahan} <br>";
echo "{$pengurangan} <br>";
echo "{$perkalian} <br>";
echo "{$pembagian} <br>";
echo "{$modulo} <br>";
echo "<br>";

// Operasi Identitas
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Menampilkan Hasil Operasi Identitas
echo "Hasil identik = {$hasilIdentik} <br>";
echo "Hasil tidak identik = {$hasilTidakIdentik} <br>";
echo "<br>";

// Penggunaan Variabel dan Perhitungan Persentase
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan Persentase Kursi Kosong
echo "Presentase kursi kosong = {$persentaseKosong} <br>";
echo "<br>"
?>
