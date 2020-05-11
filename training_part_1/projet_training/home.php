<?php

$title = "page acceuil";

require './elements/header.php';
?>
<div class="separator"></div>
<div class="paralaxHome">
  <section class="sectionParalax">
    <h2 id="text"> Lorem ipsum</h2>
    <img src="/image/assets/bg.jpg" id="bg">
    <img src="/image/assets/moon.png" id="moon">
    <img src="/image/assets/mountain.png" id="mountain">
    <img src="/image/assets/road.png" id="road">
  </section>
</div>
<div class="separator"></div>
<div class="container revealBox">
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

<a class="neonBtn"href="#">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  neon button
</a>



<!-- <div class="starter-template">
  <h1>Bootstrap starter template</h1>
  <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div> -->





<?php require './elements/footer.php' ?>