        // Mudar para active o menu de acordo com a área
        $('section').each(function () {
            var height = $(this).height(),
                offsetTop = $(this).offset().top - 58,
                menuHeight = $('.menu').innerHeight(),
                id = $(this).attr('id'),
                $itemMenu = $('a[href="#' + id + '"]');
            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();
                if (offsetTop - menuHeight < scrollTop && offsetTop + height - menuHeight >
                    scrollTop) {
                    $itemMenu.addClass('active');
                } else {
                    $itemMenu.removeClass('active');
                }
            });
        });