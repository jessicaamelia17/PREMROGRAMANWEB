<?php
$pesan = "Saya arek malang";
#ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
#ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan)=> strrev($pesan), $pesanPerKata);
#gabung kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);
echo strrev($pesan) . "<br>";
?>

