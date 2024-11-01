<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nama</title>
</head>
<body>
    <h2>Input HTML Aman</h2>
    <?php
    // Inisialisasi variabel
    $input = "";
    $email = "";
    $pesan = "";

    // Jika form di-submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil input dari form
        $input = isset($_POST['input']) ? $_POST['input'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        // Sanitasi input menggunakan htmlspecialchars untuk mencegah XSS
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        // Validasi: Pastikan nama dan email tidak kosong
        if (empty($input) && empty($email)) {
            // Jika nama dan email kosong, tampilkan pesan kesalahan
            $pesan = "Nama dan email harus diisi!";
        } elseif (empty($input)) {
            // Jika hanya nama kosong
            $pesan = "Nama harus diisi!";
        } elseif (empty($email)) {
            // Jika hanya email kosong
            $pesan = "Email harus diisi!";
        } else {
            // Jika nama dan email diisi, lanjutkan ke validasi email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Jika email valid, simpan pesan sukses
                $pesan = "Nama dan email berhasil diproses: Nama = " . $input . ", Email = " . $email;
            } else {
                // Jika email tidak valid, tampilkan pesan kesalahan
                $pesan = "Email tidak valid. Harap masukkan email yang benar.";
            }
        }
    }
    ?>

    <!-- Form input nama -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="input">Nama:</label>
        <input type="text" id="input" name="input" required value="<?php echo $input; ?>">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $email; ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <!-- Tampilkan pesan setelah input diproses -->
    <p><?php echo $pesan; ?></p>

</body>
</html>
