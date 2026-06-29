<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="text-center">
                <h1 class="display-4">Bienvenue chez TM-Coiffure</h1>
                <p class="lead">Votre salon de coiffure de confiance pour des coupes élégantes et des soins capillaires
                    de qualité.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php foreach ($images as $index => $img) { ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="<?php echo $index ?>" class="active" aria-current="true"
                            aria-label="Slide <?php echo $index + 1 ?>"></button>
                    <?php } ?>
                </div>
                <div class="carousel-inner rounded border border-black border-1 w-75 mx-auto">
                    <?php foreach ($images as $index => $img) { ?>
                        <div class="carousel-item <?php echo $index === 2 ? 'active' : '' ?> " data-bs-interval="10000">
                            <img src="<?= htmlspecialchars($img) ?>" class="d-block img-fluid" alt="Photo du salon">
                        </div>
                    <?php } ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>