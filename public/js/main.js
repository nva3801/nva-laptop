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

const headerNavbar = document.querySelector(".header_navbar");
const headerSearch = document.querySelector(".search_bar");
const searchIcon = document.querySelector(".search");
const searchClose = document.querySelector(".search-close");
searchIcon.addEventListener("click", function () {
    headerNavbar.classList.remove("active");
    headerNavbar.classList.add("hide");
    headerSearch.classList.remove("hide");
    headerSearch.classList.add("active");
});
searchClose.addEventListener("click", function () {
    headerNavbar.classList.remove("hide");
    headerNavbar.classList.add("active");
    headerSearch.classList.remove("active");
    headerSearch.classList.add("hide");
});
$(".search_bar-result").hide();
$(".search-input").keyup(function () {
    let _text = $(this).val();
    if (_text != '') {
        $.ajax({
            url: "http://127.0.0.1:8000/search?key=" + _text,
            type: 'GET',
            success: function (res) {
                let _html = '';
                for (var pro of res) {
                    _html += '<a href="" class="search_bar-item">';
                    _html += '<div class="search_bar-img">';
                    _html += '<img src="http://127.0.0.1:8000/storage/' + pro.image + '" alt="" width="100%">';
                    _html += '</div>';
                    _html += '<div class="search_bar-content">';
                    _html += '<h5 class="search_bar-heading">' + pro.name + '</h5>';
                    _html += '</div>';
                    _html += '</a >';
                }
                $(".search_bar-result").show();
                $(".search_bar-result").html(_html);
            }
        });
    } else {
        $(".search_bar-result").html('');
        $(".search_bar-result").hide();
    }
});
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}
