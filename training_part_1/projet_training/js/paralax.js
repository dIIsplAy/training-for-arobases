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
    // window.addEventListener("scroll", function () {
    //     if ($(window).scrollTop()) {
    //         $('.navbar').addClass('nav-cv');
    //     }
    //     else {
    //         $('.navbar').removeClass('nav-cv');

//     }
// })
// CLICK MODIF NAVBAR

var burgerNav = document.getElementById('burgerNav');
burgerNav.addEventListener("click", function() {
    $(".navHeader").toggleClass("unroledNav");

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
    reset: true,


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