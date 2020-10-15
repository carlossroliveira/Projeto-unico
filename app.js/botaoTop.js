/* Botão rodape */
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.up').fadeIn();
    } else {
        $('.up').fadeOut();
    }
});

$('.up').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 500);
    return false;
});

/* logo desktop e mobile*/

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.logo-desktop, .logo-mobile').fadeIn();
    } 
});

$('.logo-desktop, .logo-mobile').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 500);
    return false;
});