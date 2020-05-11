<?php
require_once './data/config.php';
require './elements/header.php';
$champions = CHAMPIONS;
$title = "page acceuil";

?>
<div class="starter-template">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>
<div class="row">
    <?php foreach ($champions as $champion) : ?>
        <div class="containerCardd col-md-4 mt-1">
            <div class="cardd">
                <div class="imgBx">
                    <!-- <img src="/image/yasuo.png"> -->
                </div>
                <div class="contentBx">
                    <h2><?= $champion['nom'] ?></br><?= $champion['desc'] ?></h2>
                    
                    <div class="size">
                        <h3>Lane :</h3>
                        <span>Top</span>
                        <span>Mid</span>
                    </div>
                    <div class="color">
                        <h3>Rank :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#"> Check Stat</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php require './elements/footer.php' ?>