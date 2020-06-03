
var swiper = new swiper('.swiper-container', {
    effect:coverflow,
    grabCursor: true,
    centeredSlides: true,
    slidesPreview: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch:0,
        depth: 100,
        modifier:1,
        slideShadows: true,
    },
    pagination:{
        el: '.swiper-pagination',
    },
});