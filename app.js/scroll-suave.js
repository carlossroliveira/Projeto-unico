        // Scroll suave para link interno

        var tamanho = $(window).width();
        if (tamanho > 767) {
            $('.menu-nav a[href^="#"]').click(function (e) {
                e.preventDefault();
                var id = $(this).attr('href'),
                    menuHeight = $('.menu').innerHeight(),
                    targetOffset = $(id).offset().top;
                $('html, body').animate({
                    scrollTop: targetOffset - menuHeight
                }, 500);
            });
        } else {
            $('.menu-nav a[href^="#"]').click(function (e) {
                e.preventDefault();
                var id = $(this).attr('href'),
                    menuHeight = $('.menu').innerHeight(),
                    targetOffset = $(id).offset().top + 580;
                $('html, body').animate({
                    scrollTop: targetOffset - menuHeight
                }, 800);
            });
        }