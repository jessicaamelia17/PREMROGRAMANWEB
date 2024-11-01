<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>Array Terindeks</h2> 
    <?php
    $ListDosen=["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraha"];

    // echo $ListDosen[2] . "<br>";
    // echo $ListDosen[0] . "<br>";
    // echo $ListDosen[1] . "<br>";
        // Menggunakan foreach loop
     foreach ($ListDosen as $dosen) {
        echo $dosen . "<br>";
    }
    ?>
</body>
</html>