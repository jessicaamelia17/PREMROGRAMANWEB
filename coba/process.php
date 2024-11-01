<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $colors = $_POST['colors'] ?? [];

    if (empty($name) || empty($colors)) {
        echo "<p>Nama dan warna wajib dipilih.</p>";
    } else {
        echo "<p>Nama: <strong>{$name}</strong></p>";
        echo "<p>Warna Favorit:</p><ul>";

        foreach ($colors as $color) {
            $safeColor = htmlspecialchars($color);
            echo "<li>{$safeColor}</li>";
        }

        echo "</ul>";
    }
} else {
    echo "<p>Formulir tidak diisi dengan benar.</p>";
}
?>
