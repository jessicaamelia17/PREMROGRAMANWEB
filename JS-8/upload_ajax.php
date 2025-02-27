<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    
    // Mendapatkan ekstensi file
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])). "");
    
    // Ekstensi yang diizinkan
    $extensions = array("pdf", "doc", "docx", "txt");
    
    // Validasi ekstensi file
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    // Validasi ukuran file (2MB maksimum)
    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }
    
    // Jika tidak ada error
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);  // Pindahkan file
        echo "File berhasil diunggah.";
    } else {
        // Tampilkan error
        echo implode(" ", $errors);
    }
}
?>
