$(".home-slider .item-list").slick({
    slideToShow: 1,
    fade: true,
    infinite: true,
    autoplay: true,
    arrows: false,
    dots: true
})



function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item-text");
    var dots = document.getElementsByClassName("sliderbutton");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


$(document).ready(function($) {
    $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop(),
            navbar = $('.fixed-top');

        if (scrollPosition > 400) {
            navbar.addClass('change-fix-top');
        } else {
            navbar.removeClass('change-fix-top');
        }
    });
});

function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    $("#myOverlay").fadeOut();
}