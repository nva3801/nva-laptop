$(document).ready(function () {
    $('.slider').slick({
        prevArrow:
            "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:
            "<button type='button' class='slick-prev pull-left over-f'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
window.onload = function () {
    var popup = document.getElementById('popup');
    var overlay = document.getElementById('backgroundOverlay');
    var openButton = document.getElementById('openOverlay');
    document.onclick = function (e) {
        if (e.target.id == 'backgroundOverlay') {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        }
        if (e.target === openButton) {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        }
    };
};