$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 20) {
        $('.sticky').addClass('corDeFundo');
        $('.sticky').addClass('animate__animated animate__slideInDown');
    } else {
        $('.sticky').removeClass('corDeFundo');
        $('.sticky').removeClass('animate__animated animate__slideInDown');
    }
});