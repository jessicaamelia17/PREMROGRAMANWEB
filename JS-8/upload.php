<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpeg", "jpg", "png", "gif");

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Ekstensi file tidak diperbolehkan: $file_name";
        }

        // Validasi ukuran file (maks 5MB)
        if ($file_size > 5242880) {
            $errors[] = "Ukuran file terlalu besar: $file_name";
        }

        // Jika tidak ada error, pindahkan file
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "Gambar $file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
