<?php
// Jumlah total kursi di restoran
$totalKursi = 45;

// Jumlah kursi yang telah ditempati
$kursiTerisi = 28;

// Menghitung jumlah kursi yang kosong
$kursiKosong = 45 - $kursiTerisi; // Menggunakan nilai langsung

// Menghitung persentase kursi yang kosong
$persentaseKosong = (100 * $kursiKosong) / $totalKursi; // Rumus langsung

// Menampilkan hasil
echo "Jumlah kursi yang masih kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong di restoran: " . number_format($persentaseKosong, 2) . "%";
?>
