<?php
    namespace Biodaten;
    require('../Biodaten.php');
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BioDATEN – Bioinformatics DATa Environment</title>
    <link rel="shortcut icon" href="img/biodaten_favicon.ico" type="image/png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biodaten.css">

    <!-- Also jQuery to avoid Bootstrap error when clicking on menu -->
    <script src="vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <header>
        <div id="navbarHeader" class="bg-dark collapse fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4 d-none d-sm-block">
                        <h4 class="text-white">About</h4>
                        <p class="text-white">This is the official project website of BioDATEN – Bioinformatics DATa Environment, a new Science Data Center which is to be created in Baden-Württemberg.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Pages</h4>
                        <ul class="list-unstyled">
                            <?=GetPageNavbarEntriesExtended()?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar fixed-top navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <?=GetPageNavbarEntries()?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main role="main">
        <?php
            require(GetPageTemplate());
        ?>
    </main>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 footer-row d-flex flex-row justify-content-around justify-content-sm-start">
                    <?=GetPageFooterEntries();?>
                </div>
                <div class="col-12 footer-row">
                    <div class="bw-logo-wrap">
                        <div class="bw-header__logo">
                            <p>sponsored by:</p>
                            <a class="bw-logo--ministry" href="//mwk.baden-wuerttemberg.de/de/startseite/">
                                <img class="bw-logo__image" src="img/logo-bawue.png" alt="Ministerium für Wissenschaft, Forschung und Kunst Baden-Württemberg">
                                <span class="bw-logo__text">Ministerium für Wissenschaft, Forschung und Kunst Baden-Württemberg</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 footer-row">
                    <span class="text-muted">
                        © 2019 Eberhard Karls Universität Tübingen, Tübingen
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
