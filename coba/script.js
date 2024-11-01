$(document).ready(function () {
    $('#colorForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: $(this).serialize(),
            success: function (response) {
                $('#result').html(response).fadeIn();
            },
            error: function () {
                $('#result').html('<p>Terjadi kesalahan. Coba lagi nanti.</p>').fadeIn();
            }
        });
    });
});
