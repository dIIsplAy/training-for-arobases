<?php
$error = null;
$emails = null;
$success = null;
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emails = $email;
        $file =  __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d');
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $success = 'Votre email a bien été enregistré';
    } else {
        $error = ' Adresse Email invalide';
    }
}

$title = 'New\'s letter';
require 'functions.php';
?>
<?php require './elements/header.php'; ?>

<?php if ($error) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>
<?php if ($success) : ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif ?>

<h2>Inscription newsletter</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum id recusandae fuga suscipit officiis ullam nobis error rerum dolorem iusto distinctio consequuntur eaque odio sunt, veniam provident sed quibusdam?</p>
<form class="form-inline" action="/news-letter.php" method="POST">
    <div class="form-group">
        <div class="form-group">
            <input class="form-control" value="<?= htmlentities($email) ?>" type="email" name="email" placeholder="Entrer votre adresse email" required>
        </div>
        <button class="btn btn-primary" type="submit">Je m'inscris</button>
    </div>
</form>




<?php require './elements/footer.php'; ?>