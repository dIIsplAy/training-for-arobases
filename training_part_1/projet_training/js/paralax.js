// PARALAX

let bg = document.getElementById("bg");
let moon = document.getElementById("moon");
let mountain = document.getElementById("mountain");
let road = document.getElementById("road");
let text = document.getElementById("text");

window.addEventListener('scroll', function() {
    var value = window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    moon.style.left = -value * 0.5 + 'px';
    mountain.style.top = value * 0.15 + 'px';
    road.style.top = value * 0.15 + 'px';
    text.style.top = value * 1 + 'px';

})


// NAVBAR SCOLL EFFFECT
window.addEventListener("scroll", function() {
        if ($(window).scrollTop()) {
            $('.navbar').addClass('black');
        } else {
            $('.navbar').removeClass('black');

        }
    })
    // NAV BAR CV
    // window.addEventListener("scroll", function() {
    //         if ($(window).scrollTop()) {
    //             $('.navbar').addClass('nav-cv');
    //         } else {
    //             $('.navbar').removeClass('nav-cv');

//         }
//     })
// CLICK MODIF NAVBAR

var burgerNav = document.getElementById('burgerNav');
burgerNav.addEventListener("click", function() {
    $(".navHeader").toggleClass("unroledNav");

})



var $nav_one_page = $('.nav-one-page');

var $nav_side_bar = $('.container-sidebar');

var $navbar_nav = $('.btn-one-page-nav');
var $navbar_nav_item = $('.nav-item-one-page');

var $displayValue = $('.displayValue')

$(window).on('scroll', function() {

    if (window.scrollY > 400) {

        $nav_one_page.addClass('opacity-zero');
        $navbar_nav.addClass('display-none');
        $navbar_nav_item.addClass('display-none');
        $displayValue.addClass('display-none');

    } else {

        $nav_one_page.removeClass('opacity-zero');
        $navbar_nav.removeClass('display-none');
        $displayValue.removeClass('display-none');
        // $navbar_nav.style.display = "flex";


    }

});



$(window).on('scroll', function() {

    if (window.scrollY > 600) {

        $nav_side_bar.addClass('opacity-one');

    } else {

        $nav_side_bar.removeClass('opacity-one');

    }

});

/////////// Recupere la distance en partant du haut de la page ////////


var position = window.pageYOffset;

// Recupere la position d'un element dans la page
// var getElemDistance = function(elem) {
//     var toto = 0;
//     if (elem.offsetParent) {
//         do {
//             toto += elem.offsetTop;
//             elem = elem.offsetParent;
//         } while (elem);
//     }
//     return toto >= 0 ? toto : 0;
// };

var elem = document.querySelector('#test-scroll');
var selectedSection = document.querySelector('#sectionOne');
window.addEventListener('scroll', function() {

    var elemTop = elem.offsetTop;
    var elemBot = elem.offsetTop + elem.offsetHeight;
    // var toto = getElemDistance(elem);

    console.log(elemTop);
    console.log(elemBot);

    if (window.scrollY <= elemBot && window.scrollY >= elemTop) {
        selectedSection.classList.add('test');
    } else if (window.scrollY >= elemBot) {
        console.log('toto');
        selectedSection.classList.remove('test');

    }
})


// SCROL REVEAL 


ScrollReveal().reveal('.cardhome', {
    easing: 'ease-in',
    delay: 400,
    duration: 600,
    interval: 400,
    opacity: 0,
    distance: '300px',
    origin: 'left',
    scale: 0.85,
    reset: true,
    rotate: {
        x: 0,
        y: 0,
        z: 0
    }
});

ScrollReveal().reveal('.contentRvl-1', {
    easing: 'ease-in',
    delay: 400,
    duration: 700,
    origin: 'left',
    distance: '200px',
    reset: true,
    rotate: {
        x: 20,
        y: 20,

    }
})

ScrollReveal().reveal('.contentRvl-2', {
    easing: 'ease-in',
    delay: 400,
    duration: 700,
    origin: 'right',
    distance: '200px',
    reset: true,
    rotate: {
        x: 20,
        y: 20,

    }
})
ScrollReveal().reveal('.test-separator', {
    easing: 'ease-in',
    delay: 300,
    duration: 1000,
    scale: 0.25,
    reset: true,
})
ScrollReveal().reveal(' .separatorEffectLeft', {
    easing: 'ease-in',
    delay: 500,
    duration: 800,
    distance: '300px',
    origin: 'left',
    mobile: true,
    reset: true,
})
ScrollReveal().reveal('.separatorEffectRight', {
    easing: 'ease-in',
    delay: 500,
    duration: 800,
    distance: '300px',
    origin: 'right',
    mobile: true,
    reset: true,
})
ScrollReveal().reveal('.revealTitle', {
    easing: 'ease-in',
    delay: 600,
    duration: 700,
    distance: '300px',
    origin: 'left',
    reset: true,
})
ScrollReveal().reveal('.revealPara', {
    easing: 'ease-in',
    delay: 900,
    duration: 600,
    reset: true,

})
ScrollReveal().reveal('.RevalTitlePara', {
    easing: 'ease-in',
    delay: 800,
    duration: 600,
    distance: '50px',
    origin: 'right',
    reset: true,

})
ScrollReveal().reveal('.block-btn-orange', {
    easing: 'ease-in',
    delay: 900,
    duration: 600,
    reset: true,

})
ScrollReveal().reveal('.image-content-cv', {
    easing: 'ease-in',
    delay: 600,
    duration: 600,
    distance: '100px',
    origin: 'left',
    reset: true,

})
ScrollReveal().reveal('.text-about-me', {
    easing: 'ease-in',
    delay: 800,
    duration: 600,
    reset: true,


})
ScrollReveal().reveal('.section-card', {
    easing: 'ease-in',
    delay: 800,
    duration: 600,


})

ScrollReveal().reveal('#h1-section-five', {
    easing: 'ease-in',
    delay: 600,
    duration: 600,
    origin: 'bottom',
    distance: '200px',
})

// BTN BOTTOM TO TOP 

$(document).ready(function() {

    $(window).scroll(function() {
        if ($(window).scrollTop() > 40) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }
    });
    $("#topBtn").click(function() {
        $('html ,body').animate({ scrollTop: 0 }, 200);
    })
})