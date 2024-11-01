<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $errors = array();

//     if(empty($nama)){
//         $errors[] = "Nama harus diisi.";
//     }

//     if (empty($email)){
//         $errors[] = "Email harus diisi.";
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         $errors[] = "Format email tidak valid.";
//     }

//     if(!empty($errors)){
//         foreach ($errors as $error) {
//             echo $error . "<br>";
//         }
//     } else{
//         echo "Data berhasil dikirim: Nama = $nama. Email = $email";
//     }
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    // Validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi password
    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    // Jika tidak ada error
    if (empty($errors)) {
        // Proses data (misalnya, simpan ke database)
        echo "Data berhasil diproses.";
    } else {
        echo implode(", ", $errors);
    }
}


?>
