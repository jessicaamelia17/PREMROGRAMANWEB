<?php
$nilaiSiswa = [85,92,78,64,90,55,88,79,70,96];

$nilaiLulus =[];

foreach ($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo "<br><br>";
//LANGKAH 6

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun =[];

foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] >5 ){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',', $karyawanPengalamanLimaTahun);
echo "<br><br>";
//LANGKAH 10

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br>";
//LANGKAH 13

// Data siswa
$siswa = [
    ["nama" => "Alice", "nilai" => 85],
    ["nama" => "Bob", "nilai" => 92],
    ["nama" => "Charlie", "nilai" => 78],
    ["nama" => "David", "nilai" => 64],
    ["nama" => "Eva", "nilai" => 90],
];

// Menghitung rata-rata nilai
$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach ($siswa as $data) {
    $totalNilai += $data["nilai"];
}

$rataRata = $totalNilai / $jumlahSiswa;
echo "Rata-rata nilai kelas: {$rataRata} <br>";
// Menampilkan siswa yang nilainya di atas rata-rata
echo "Siswa yang nilainya di atas rata-rata ($rataRata):<br>";

foreach ($siswa as $data) {
    if ($data["nilai"] > $rataRata) {
        echo $data["nama"] . " dengan nilai " . $data["nilai"] . "<br>";
    }
}


?>