<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <=100){
    echo "Nilai huruf: A";
} else if($nilaiNumerik >=80 && $nilaiNumerik <90){
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C"; 
} else if ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

//langkah 6
$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatamHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget){
    $jarakSaatini += $peningkatamHarian;
    $hari++;
}

echo "<br><br>";
echo "Atlet tersebut memerlukan $hari hari untuk menvapai jarak 500 kilometer";

//langkah 10
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah"; 

//langkah 14
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br><br>";
echo "Total skor ujian adalah: $totalSkor <br><br>";

//langkah 18
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}

//LANGKAH 21
echo "<br><br>";

// Daftar nilai 10 siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai dari yang terendah ke tertinggi
sort($nilaiSiswa);

// Variabel untuk menyimpan total nilai
$totalNilai = 0;

// Menghitung total nilai dengan mengabaikan dua nilai tertinggi dan dua nilai terendah
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

// Menampilkan hasil
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai";



//LANGKAH 23

// Harga awal produk
$hargaAwal = 120000;

// Persentase diskon
$diskon = 20;

// Menghitung jumlah diskon dalam rupiah
$jumlahDiskon = ($diskon / 100) * $hargaAwal;

// Menghitung harga setelah diskon
$hargaAkhir = $hargaAwal - $jumlahDiskon;

// Menampilkan hasil
echo "<br><br>";
echo "Harga awal produk: Rp " . $hargaAwal . "<br>";
echo "Diskon: " . $diskon . "%" . "<br>";
echo "Jumlah diskon: Rp " . $jumlahDiskon . "<br>";
echo "Harga setelah diskon: Rp " . $hargaAkhir;

//LANGKAH 25


// Nilai awal skor pemain
$skorPemain = 620; // contoh

// Menghitung total skor (dalam kasus ini, skor_pemain adalah total skor)
$totalSkor = $skorPemain;

// Menggunakan ternary operator untuk menentukan hadiah
$hadiah = ($totalSkor > 500) ? "YA" : "TIDAK";

// Menampilkan hasil
echo "<br><br>";
echo "Total skor pemain adalah: " . $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah;


echo "<br><br><br>";
?>
<?php
// Daftar nilai siswa
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai siswa dari terkecil ke terbesar
sort($nilai_siswa);

// Menghapus dua nilai terendah
array_splice($nilai_siswa, 0, 2);

// Menghapus dua nilai tertinggi
array_splice($nilai_siswa, -2);

// Menghitung total nilai
$total_nilai = array_sum($nilai_siswa);

// Menghitung jumlah siswa setelah penghapusan
$jumlah_siswa = count($nilai_siswa);

// Menghitung rata-rata
$rata_rata = $total_nilai / $jumlah_siswa;

// Menampilkan hasil
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan terendah: " . $total_nilai . "<br>";
echo "Jumlah siswa setelah penghapusan: " . $jumlah_siswa . "<br>";
echo "Rata-rata nilai: " . $rata_rata;


$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Jumlah nilai yang ingin diabaikan
$nilai_diabaikan = 2;

// Inisialisasi variabel
$total_nilai = 0;
$jumlah_siswa = count($nilai_siswa);
$nilai_tertinggi = $nilai_siswa[0];
$nilai_terendah = $nilai_siswa[0];

// Menghitung total nilai, mencari nilai tertinggi dan terendah
for ($i = 0; $i < $jumlah_siswa; $i++) {
    $total_nilai += $nilai_siswa[$i];

    if ($nilai_siswa[$i] > $nilai_tertinggi) {
        $nilai_tertinggi = $nilai_siswa[$i];
    } else if ($nilai_siswa[$i] < $nilai_terendah) {
        $nilai_terendah = $nilai_siswa[$i];
    }
}

// Menghitung total nilai setelah dikurangi nilai tertinggi dan terendah
$total_nilai -= $nilai_tertinggi + $nilai_terendah;
$jumlah_siswa -= $nilai_diabaikan * 2;

// Menghitung rata-rata
$rata_rata = $total_nilai / $jumlah_siswa;

// Menampilkan hasil
echo "Total nilai setelah mengabaikan " . $nilai_diabaikan . " nilai tertinggi dan terendah: " . $total_nilai . "<br>";
echo "Jumlah siswa setelah penghapusan: " . $jumlah_siswa . "<br>";
echo "Rata-rata nilai: " . $rata_rata;