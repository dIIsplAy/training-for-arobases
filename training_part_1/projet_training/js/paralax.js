// PARALAX

let bg = document.getElementById("bg");
let moon = document.getElementById("moon");
let mountain = document.getElementById("mountain");
let road = document.getElementById("road");
let text = document.getElementById("text");

window.addEventListener('scroll', function () {
    var value = window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    moon.style.left = -value * 0.5 + 'px';
    mountain.style.top = value * 0.15 + 'px';
    road.style.top = value * 0.15 + 'px';
    text.style.top = value * 1 + 'px';

})


// NAVBAR SCOLL EFFFECT
window.addEventListener("scroll", function () {
    if ($(window).scrollTop()) {
        $('.navbar').addClass('black');
    }
    else {
        $('.navbar').removeClass('black');

    }
})

// CLICK MODIF NAVBAR

var burgerNav = document.getElementById('burgerNav');
burgerNav.addEventListener("click", function () {
    $(".navHeader").toggleClass("unroledNav");

})


// SCROL REVEAL 


ScrollReveal().reveal('.revealBox, .card',
    {
        easing: 'ease-in',
        delay: 400,
        duration: 600,
        interval: 400,
        opacity: 0,
        distance: '300px',
        origin: 'left',
        scale: 0.85,
        rotate: {
            x: 0,
            y: 0,
            z: 0
        }
    });

    ScrollReveal().reveal('.contentRvl-1',
    {
        easing:'ease-in',
        delay:400,
        duration:700,
        origin:'left',
        distance:'200px',
        rotate:{
            x:20,
            y:20,
            
        }
    })

    ScrollReveal().reveal('.contentRvl-2',
    {
        easing:'ease-in',
        delay:400,
        duration:700,
        origin:'right',
        distance:'200px',
        rotate:{
            x:20,
            y:20,
            
        }
    })
    ScrollReveal().reveal('.test-separator',
    {
        easing:'ease-in',
        delay:300,
        duration:1000,
        scale:0.25,
    })