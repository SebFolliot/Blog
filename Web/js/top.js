// Lien pour remonter en haut de page
$(document).ready(function () {
    $("body").append("<a href='#top' class='top' title='Haut de page'><i style='color: silver' class='fas fa-hand-point-up fa-2x'></i></a>");

    $(window).scroll(function () {
        posScroll = $(document).scrollTop();
        if (posScroll >= 400)
            $('.top').fadeIn(500);
        else
            $('.top').fadeOut(500);
    });

    $('.top').css({
        'position': 'fixed',
        'right': '30px',
        'bottom': '30px',
        'display': 'none',
        'z-index': '10'
    });
});