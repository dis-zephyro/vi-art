$('.gallery__tab').tabs();

// Модальное окно

$(".popup").fancybox({
    "padding" : 15
});


//  Галерея работ

$(document).ready(function(){

    $("#work-1 .gallery__slider").owlCarousel({
        loop:true,
        margin: 19,
        nav:true,
        dots: false,
        items: 3
    });

    $("#work-2 .gallery__slider").owlCarousel({
        loop:true,
        margin:19,
        nav:true,
        dots: false,
        items: 3
    });

    $("#work-3 .gallery__slider").owlCarousel({
        loop:true,
        margin:19,
        nav:true,
        dots: false,
        items: 3
    });
});


