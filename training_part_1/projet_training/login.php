<?php
$error = null;
$password = '$2y$10$p4mNjKSKnfH0bRhmcwX/8uHYz56Mw8dUoQnyMFmJpzQwfBwCItbAC';
if (!empty($_POST['username']) && !empty($_POST['pwd'])) {
    if ($_POST['username'] == 'Jhon' && password_verify($_POST['pwd'], $password)) {
        session_start();
        $_SESSION['connected'] = 1;
        header('Location: /dashboard.php');
    } else {
        $error = "Login or Password incorrect";
    }
}
require 'functions/auth.php';
if (connected()) {
    header('Location: /dashboard.php');
    exit();
}
require 'elements/header.php';
?>
<div class="bigSeparator"></div>
<div class="container">
    <?php if ($error) : ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif ?>
    <div class="col-md-8 mt-3">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp" placeholder="Enter username">
                <small id="usernameHelp" class="form-text text-muted">Tell us who you are.</small>
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">
            </div>
            <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php require './elements/footer.php' ?>
