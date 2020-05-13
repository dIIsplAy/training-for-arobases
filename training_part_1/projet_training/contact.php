<?php
session_start();
$title = "Nous contacter";
require_once './data/config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ??  date('G'));
$jour = (int)($_GET['jour'] ?? date('N') -1);
$creneaux = CRENEAUX[$jour];

$ouvert = in_creneaux($heure, $creneaux);
$color = 'green';
$color = $ouvert ? 'green' : 'red';
// if(!$ouvert){
//     $color = 'red';
// }
require './elements/header.php';
?>
<div class="bigSeparator"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Retrouvez nous !</h2>
            <div style="height:60%; width:60%" id="map"></div>
        </div>
        <div class="col-md-6">
            <h2>Horaires d'ouvertures</h2>
            <?php if ($ouvert) : ?>
                <div class="alert alert-success">
                    Le magasin sera ouvert
                </div>
            <?php else : ?>
                <div class="alert alert-danger">
                    Le magasin sera fermé
                </div>
            <?php endif ?>
            <form action="" method="GET">
                <div class="form-group">
                    <?= select('jour', $jour, JOURS); ?>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
                </div>
                <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
            </form>
            <ul>
                <?php foreach (JOURS as $k => $jours) : ?>
                    <li>
                        <strong><?= $jours ?></strong> :
                        <?= creneaux_html(CRENEAUX[$k]); ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>



<?php require './elements/footer.php' ?>