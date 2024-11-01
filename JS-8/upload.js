$(document).ready(function() {
    // Aktifkan tombol setelah gambar dipilih
    $('#files').change(function() {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Proses AJAX untuk mengunggah gambar
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Mencegah form dikirim secara default

        var formData = new FormData(this); // Ambil data form
        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); // Tampilkan respons dari server
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah gambar.');
            }
        });
    });
});
