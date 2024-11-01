<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $nilai1 = filter_input(INPUT_POST, 'nilai1', FILTER_VALIDATE_FLOAT);
    $nilai2 = filter_input(INPUT_POST, 'nilai2', FILTER_VALIDATE_FLOAT);
    $nilai3 = filter_input(INPUT_POST, 'nilai3', FILTER_VALIDATE_FLOAT);

    // Check if the name is valid
    if (preg_match('/[@#$\d]/', $nama)) {
        echo "<p class='error'>Nama tidak boleh mengandung simbol @#$ atau angka.</p>";
        return; // Exit if the name is invalid
    }

    // Other validations for numeric values remain
    if ($nilai1 === false || $nilai2 === false || $nilai3 === false) {
        echo "<p class='error'>Input nilai tidak valid.</p>";
        return; // Exit if numeric values are invalid
    }

    $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

    $grade = match(true) {
        $rata_rata >= 87 => 'A+',
        $rata_rata >= 76 => 'A',
        $rata_rata >= 61 => 'B',
        $rata_rata >= 50 => 'C',
        $rata_rata >= 31 => 'D',
        default => 'E'
    };

    echo "<div class='container result'>";
    echo "<p class='nama'>Nama: " . $nama . "</p>";
    echo "<p class='rata-rata'>Rata-Rata: " . number_format($rata_rata, 2) . "</p>";
    echo "<p class='grade'>Grade: $grade</p>";
    echo "</div>";
}


?>
