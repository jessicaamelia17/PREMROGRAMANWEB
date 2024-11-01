<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan hasil
echo "Hasil penjumlahan: {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil pengurangan: {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil perkalian: {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil pembagian: {$a} / {$b} = {$hasilBagi} <br>";
echo "Hasil sisa bagi (modulus): {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil pangkat: {$a} ** {$b} = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

//Menampilkan hasil
echo "<br>";
echo "Hasil sama: {$a} == {$b} = " . ($hasilSama ? 'true' : 'false') . " <br>";
echo "Hasil tidak sama: {$a} != {$b} = " . ($hasilTidakSama ? 'true' : 'false') . " <br>";
echo "Hasil lebih kecil: {$a} < {$b} = " . ($hasilLebihKecil ? 'true' : 'false') . " <br>";
echo "Hasil lebih besar: {$a} > {$b} = " . ($hasilLebihBesar ? 'true' : 'false') . " <br>";
echo "Hasil lebih kecil sama: {$a} <= {$b} = " . ($hasilLebihKecilSama ? 'true' : 'false') . " <br>";
echo "Hasil lebih besar sama: {$a} >= {$b} = " . ($hasilLebihBesarSama ? 'true' : 'false') . " <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

//Menampilkan hasil
echo "<br>";
echo "Hasil And: {$a} && {$b} = " . ($hasilAnd ? 'true' : 'false') . " <br>";
echo "Hasil Or: {$a} || {$b} = " . ($hasilOr ? 'true' : 'false') . " <br>";
echo "Hasil Not A: !$a = " . ($hasilNotA ? 'true' : 'false') . " <br>";
echo "Hasil Not B: !$b = " . ($hasilNotB ? 'true' : 'false') . " <br>";

$hasilPertambahan = $a += $b;
$hasilPengurangan = $a -= $b;
$hasilPerkalian = $a *= $b;
$hasilPembagian = $a /= $b;
$hasilModulus = $a %= $b;

//Menampilkan hasil
echo "<br>";
echo "Hasil penjumlahan: a += b = {$hasilPertambahan} <br>";
echo "Hasil pengurangan: a -= b = {$hasilPengurangan} <br>";
echo "Hasil perkalian: a *= b = {$hasilPerkalian} <br>";
echo "Hasil pembagian: a /= b = {$hasilPembagian} <br>";
echo "Hasil sisa bagi (modulus): a %= b = {$hasilModulus} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//Menampilkan hasil
echo "<br>";
echo "Hasil Identik: {$a} === {$b} = " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil tidak identik: {$a} !== {$b} = " . ($hasilTidakIdentik ? 'true' : 'false');

?>