<?php require './elements/header.php' ?>


<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal1.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal12.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal13.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal14.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal10.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal6.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal11.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal8.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal9.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <div class="swiper-slide">
      <div class="imgBoxSlide">
        <img class="imgSlide" src="/image/animals/animal10.jpg">
      </div>
      <!-- <div class="slideDetails">
            <h3>Cristophol</h3></br>
            <h3><span>Thomas</span></h3>
          </div> -->
    </div>
    <!-- Add Pagination -->
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 10,
      depth: 200,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // autoplay: {
    //   delay: 500,
    //   deisableOnInteraction:false,
    // },
  });
</script>
<?php require './elements/footer.php' ?>