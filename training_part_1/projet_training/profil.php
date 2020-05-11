<?php
require_once 'functions.php';


$nom = null;
if (!empty($_GET['action']) && $_GET['action'] ==='deconnecter') {
    unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', '', time() - 10);
}
if (!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}
if (!empty($_POST['nom'])) {
    setcookie('utilisateur', $_POST['nom']);
    $nom = $_POST['nom'];
}
require 'elements/header.php'
?>

 <?php if ($nom) : ?>
    <div class="col-md-8">
        <h3>Bonjour <?= htmlentities($nom) ?></h3>
        <a href="profil.php?action=deconnecter">deco</a>
    </div>
<?php else : ?>
    <h2>Connexion</h2>
    <form action="" method="POST">
        <div class="col-md-4 form-group">
            <input class="form-control" name="nom" placeholder="Jhon">
            
            <button class="btn btn-primary">Connexion</button>
        </div>
    </form>
<?php endif ?>

<?php require 'elements/footer.php' ?>