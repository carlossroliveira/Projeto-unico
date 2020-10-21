$(document).ready(function() {
    $('.formulario').submit(function() {
        $('.loading').html("<img src='./img/loading.gif' width='50'>");
        $.ajax({
            url: "enviar.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
                $('.mostrar').html(data);
                $('.loading').hide();
                $('.formulario')[0].reset();
            }
        });

        return false;
    });
});