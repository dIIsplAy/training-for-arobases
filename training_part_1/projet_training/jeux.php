<?php
$title = 'Jeux';
$adeviner = 150;
$error = null;
$success = null;

if (isset($_POST['chiffre'])) {
    $value = (int) $_POST['chiffre'];
    if ($value > $adeviner) {
        $error = 'Votre chiffre ets trop grand';
    } elseif ($value < $adeviner) {
        $error =  ' Votre chiffre est trop petit';
    } else {
        $success = "Bien jouer vous avez gagner! <strong>$adeviner</strong>";
    }
}

require 'header.php';
?>

<?php if ($error != null) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php elseif ($success) : ?>
    <div class="altert alert-success">
        <?= $success ?>
    </div>
<?php endif ?>

<form action="/jeux.php" method="POST">
<div class="form-group">
    <input type="checkbox"  class="form-control" name="parfum[]" value="fraise">fraise
    <input type="checkbox"  class="form-control" name="parfum[]" value="vanille">vanille
    <input type="checkbox"  class="form-control" name="parfum[]" value="chocolat">chocolat
    <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
</div>
    <button type="submit" class="btn btn-primary">Deviner</button>
</form>
<h2>$_GET</h2>
<pre>
<?php var_dump($_GET)?>
</pre>
<h2>$_POST</h2>
<pre>
<?php var_dump($_POST)?>
</pre>
<?php require 'footer.php'; ?>