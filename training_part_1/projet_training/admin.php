<?php

$statut = null;
if (!empty($_GET['action']) && $_GET['action'] ==='deconnecter') {
    unset($_COOKIE['statut']);
    setcookie('statut', '', time() - 10);
}

if(!empty($_COOKIE['statut'])){
    $statut = $_COOKIE['statut'];
}

if(!empty($_POST['statut'])){
    setcookie('statut', $_POST['statut']);
    $statut = $_POST['statut'];
}
require 'elements/header.php';
?>
<div class="separator"></div>

<?php if($statut === 'normal user'):?>
    <div class="alert alert-danger">
        T'as pas les droits frere
    </div>
    <form action="" method="post">
        <label for="statut ">Connect to admin</label>
        <div class="form-group">
            <select name="statut" id="statut"class="form-control">
                <option>normal user</option>
                <option>admin</option>
            </select>
        </div>
        <button type="submite" class="btn btn-primary">Access</button>
    </form>
<?php elseif($statut ==='admin'): ?>
    Bienvenue dans l'espace admin
    <a href="admin.php?action=deconnecter">deco</a>

<?php else :?>
    <form action="" method="post">
        <label for="statut ">Connect to admin</label>
        <div class="form-group">
            <select name="statut" id="statut"class="form-control">
                <option>normal user</option>
                <option>admin</option>
            </select>
        </div>
        <button type="submite" class="btn btn-primary">Access</button>
    </form>
<?php endif ; ?>





<?php require 'elements/footer.php'; ?>