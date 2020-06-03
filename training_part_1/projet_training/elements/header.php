<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>
        <?php if (isset($title)) : ?>
            <?= $title; ?>
        <?php else : ?>
            <?= "mon site"; ?>
        <?php endif ?>

    </title>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CSS SWIPER.JS FOR SLIDER PAGE -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/styles.css">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/"> -->
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Alegreya+Sans|B612">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/80834d3217.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">



    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark  mb-4 fixed-top navHeader">
            <a class="navbar-brand" href="#">Display</a>
            <button class="navbar-toggler" id="burgerNav" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <?= nav_menu('nav-link'); ?>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Others
                        </a>
    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="horizontal-scroll.php">Horizontal Scroll page</a>
                            <a class="dropdown-item" href="slider-page.php">Slider</a>
                            <a class="dropdown-item" href="infinite-scroll-grid.php">Reveal grid page infinite</a>
                            <a class="dropdown-item" href="jeux-icecream.php">Made your ice cream</a>
                            <a class="dropdown-item" href="menu.php">Menu food</a>
                        </div>
                    </div>
                </ul>
                <ul class="navbar-nav">
                    <?php if (connected()) : ?>
                        <li class="nav-item">
                            <a class="btn-style-2" href="/logout.php">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <button type="button" class="btn-style-1" data-toggle="modal" data-target="#myModal">
                                Login
                            </button>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </nav>
        <div class="modal fade" style="z-index:1000000" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Sign In Form</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-8 mt-3">
                            <h3>Welcom</h3>
                            <form action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp" placeholder="Enter username">
                                    <small id="usernameHelp" class="form-text text-muted">Tell us who you are.</small>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">
                                </div>
                                <button type="submit" style="left: 50% !important;top: 0%!important;margin-top:10% !important" class="btn-style-1">login</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- <main role="main" class="container-fluid container"> -->