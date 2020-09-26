var pegaWidth = $(window).width();
var largura = 990;

if (pegaWidth < largura) {

    $('#proS').append($('#proH'));
} else {
    $('#proS').remove();
}