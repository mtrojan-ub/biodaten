<!-- example: see https://getbootstrap.com/docs/4.3/examples/album/ -->
<section class="jumbotron text-center">
    <div class="container">
        <p>
            <img src="img/biodaten_logo.jpg" alt="BioDATEN" height="400" />
        </p>
        <h1 class="jumbotron-heading">Bioinformatics DATa Environment</h1>
        <h2 class="jumbotron-heading">Science Data Center</h1>
    </div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php print \Biodaten\GetPageCards();?>
        </div>
    </div>
</div>