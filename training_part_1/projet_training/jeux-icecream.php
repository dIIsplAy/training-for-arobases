<?php
require_once 'functions.php';
$title = 'Ice cream';
$parfums = [
    'vanille' => 4,
    'chocolat' => 5,
    'fraise' => 3
];

$cornets = [
    'pot' => 2,
    'cornet' => 3

];

$supplements = [
    'Pépite de chocolat' => 1,
    'chantilly' => 0.5

];

$ingredients = [];
$total = 0;

foreach (['parfum','cornet', 'supplement'] as $name) {
    if (isset($_GET[$name])) {
        $prix = $name . 's';
        $choix = $_GET[$name];
        if (is_array($choix)) {
            foreach ($choix as $value) {
                if (isset($$prix[$value])) {
                    $ingredients[] = $value;
                    $total += $$prix[$value];
                }
            }
        } else {
            if (isset($$prix[$choix])) {
                $ingredients[] = $choix;
                $total += $$prix[$choix];
            }
        }
    }
}

require './elements/header.php';
?>
<div class="bigSeparator"></div>
<div class="container">
    <h1>Creat your ice ream !</h1>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Détails de votre achat</h2>
                        <ul>
                            <?php foreach ($ingredients as $ingredient) : ?>
                                <li>
                                    <?= $ingredient ?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <p>
                            <strong>Prix : </strong><?= $total ?>
                        </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form action="/jeux-icecream.php" method="GET">
                <h2>Choisissez vos parfums</h2>
                <?php foreach ($parfums as $parfum => $prix) : ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('parfum', $parfum, $_GET) ?>
                            <?= $parfum ?> - <?= $prix ?> $
                        </label>
                    </div>
                <?php endforeach ?>
                <h2>Choisissez votre cornet</h2>
                <?php foreach ($cornets as $cornet => $prix) : ?>
                    <div class="checkbox">
                        <label>
                            <?= radio('cornet', $cornet, $_GET) ?>
                            <?= $cornet ?> - <?= $prix ?> $
                        </label>
                    </div>
                <?php endforeach ?>
                <h2>Choisissez vos suppléments</h2>
                <?php foreach ($supplements as $supplement => $prix) : ?>
                    <div class="checkbox">
                        <label>
                            <?= checkbox('supplement', $supplement, $_GET) ?>
                            <?= $supplement ?> - <?= $prix ?> $
                        </label>
                    </div>
                <?php endforeach ?>
                <button type="submit" class="btn btn-primary">Composer ma glace</button>
            </form>
        </div>
    
    </div>
</div>

<?php require './elements/footer.php'; ?>