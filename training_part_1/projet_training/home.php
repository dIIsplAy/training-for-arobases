<?php

$title = "page acceuil";

require './elements/header.php';
?>
<div class="paralaxHome">
  <section class="sectionParalax">
    <h2 id="text"> Simple parallax </h2>
    <img src="/image/assets/bg.jpg" id="bg">
    <img src="/image/assets/moon.png" id="moon">
    <img src="/image/assets/mountain.png" id="mountain">
    <img src="/image/assets/road.png" id="road">
  </section>
</div>
<div class="separator"></div>
<div class="container revealBox">
  <h2 >Simple responsiv grid</h2>
  <div class="homeBx">
    <div class="containerBox">
      <div class="card">
        <div class="imgBoxHome">
          <img src="/image/img1.jpg">
        </div>
        <div class="contentCardHome">
          <div>
            <h2>Test 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBoxHome">
          <img src="/image/img2.jpg">
        </div>
        <div class="contentCardHome">
          <div>
            <h2>Test 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBoxHome">
          <img src="/image/img3.jpg">
        </div>
        <div class="contentCardHome">
          <div>
            <h2>Test 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBoxHome">
          <img src="/image/img4.jpg">
        </div>
        <div class="contentCardHome">
          <div>
            <h2>Test 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="separatorSmall"></div>
<div class="container">
  <h2>Display content exemple</25>
  <div class="row contentTestBox">
    <div class="col-md-5 content-test contentRvl-1">
      <h3>Test</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda vel consectetur beatae dolorum aliquam,</p>
    </div>
    <div class="test-separator"></div>
    <div class="col-md-5 content-test contentRvl-2">
    <h3>Test</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda vel consectetur beatae dolorum aliquam,</p>
    </div>
  </div>
</div>

<!-- <a class="neonBtn"href="#">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  neon button
</a> -->


<?php require './elements/footer.php' ?>