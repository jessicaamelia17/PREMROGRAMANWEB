<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara tradisional

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Reset pesan error
            $("#nama-error").text("");
            $("#email-error").text("");

            // Validasi form
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            }

            if (valid) {
                // Kirim data menggunakan AJAX
                $.ajax({
                    url: 'proses_validasi.php',
                    type: 'POST',
                    data: { nama: nama, email: email },
                    success: function(response) {
                        alert("Form berhasil dikirim: " + response);
                        // Misalnya kita bisa reset form setelah sukses
                        $("#myForm")[0].reset();
                    },
                    error: function(xhr, status, error) {
                        alert("Terjadi kesalahan: " + error);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
