// PARALAX

let bg = document.getElementById("bg");
let moon = document.getElementById("moon");
let mountain = document.getElementById("mountain");
let road = document.getElementById("road");
let text = document.getElementById("text");

window.addEventListener('scroll', function(){
    var value = window.scrollY;

    bg.style.top =  value * 0.5 + 'px';
    moon.style.left =  -value * 0.5 + 'px';
    mountain.style.top =  value * 0.15 + 'px';
    road.style.top =  value * 0.15 + 'px';
    text.style.top =  value * 1 + 'px';
    
})


// NAVBAR SCOLL EFFFECT
window.addEventListener("scroll", function(){
    if($(window).scrollTop()){
        $('.navbar').addClass('black');
    }
    else {
        $('.navbar').removeClass('black');

    }
})

// CLICK MODIF NAVBAR

var burgerNav = document.getElementById('burgerNav');
burgerNav.addEventListener("click", function(){
    $(".navHeader").toggleClass("unroledNav");

})


// SCROL REVEAL 


ScrollReveal().reveal('.revealBox, .card');
