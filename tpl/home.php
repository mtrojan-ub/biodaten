<!-- example: see https://getbootstrap.com/docs/4.3/examples/album/ -->
<section class="jumbotron text-center">
    <div class="container">
        <p>
            <img id="img-home" src="img/biodaten_logo.jpg" alt="BioDATEN" />
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