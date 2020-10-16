        // Scroll suave para link interno
        $('.menu-nav a[href^="#"]').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('href'),
                menuHeight = $('.menu').innerHeight(),
                targetOffset = $(id).offset().top +540;
            $('html, body').animate({
                scrollTop: targetOffset - menuHeight
            }, 500);
        });