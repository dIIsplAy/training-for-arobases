<!-- </main> -->
<!-- /.container -->
<footer>
    <hr>
    <div class="row mr-0 ml-0">
        <div class="col-md-4">
            <h5>Inscription newsletter</h5>
            <form class="form-inline" action="/news-letter.php" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Entrer votre adresse email" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Je m'inscris</button>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <?php
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
            ajouter_vue();
            $vues = nombre_vues();
            ?>
            Il y a <?= $vues ?> visite<?php if ($vues > 1) : ?>s<?php endif; ?> sur le site
        </div>
        <div class="col-md-4">
            <h5>Navigation</h5>
            <ul class="list-unstyled text-small">
                <?= nav_menu(''); ?>
            </ul>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="/js/paralax.js"></script>
<script src="/js/functions.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuICTmd92NGNYJSfNjp34NgjlWLosu6Gs&callback=initMap">
    </script>

<script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>