<div class="container-fluid" id="prestation">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 ">
            <div class="text-center">
                <h1 class="display-4">Nos prestations</h1>
                <p class="lead">Découvrez nos services de coiffure et de soins capillaires pour hommes, femmes et
                    enfants.</p>
            </div>
            <div class="card bg-dustytaupe1 p-2 border border-graphite" style="width:auto;">
                <h2 class="card-title text-center">Tarifs</h2>
                <hr style="background-color: white; height: 2px; border: none;">
                <table class="table table-borderless text-center table-dark">
                    <tbody class="border border-graphite ">
                        <?php
                        $prestations = array(
                            "Barbe Collier" => "10€",
                            "Coupe Enfant (-12 ans)" => "12€",
                            "Coupe Homme" => "15€",
                            "Coupe Homme + Taille de Barbe" => "25€",
                            "Soin Visage" => "10€",
                            "Epilation cire chaude" => "10€",
                            "Coupe Ciseaux" => "18€",
                            "Lissage Kératine" => "40€"
                        );
                        $temps = array("20min", "20min", "30min", "30min", "20min", "20min", "30min", "45min");
                        $compteur = 0;
                        foreach ($prestations as $prestation => $prix) {
                            ?>
                            <tr>
                                <td class="bg-graphite color-white border-bottom border-dustytaupe1">
                                    <?php echo $prestation; ?>
                                </td>
                                <td class="bg-graphite color-white border-bottom border-dustytaupe1">
                                    <?php echo $temps[$compteur]; ?>
                                </td>
                                <td class="bg-graphite color-white border-bottom border-dustytaupe1"><?php echo $prix; ?>
                                </td>
                            </tr>
                            <?php
                            $compteur++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 text-center">
            <p class="lead">Prenez rendez-vous sur notre plateforme "Planity" pour réserver votre créneau et profiter de
                nos services de coiffure de qualité.</p>
            <button class="btn btn-graphite" aria-label="Close"><a class="text-white"
                    href="https://www.planity.com/tm-coiffure-74000-annecy" target="_blank">Prendre
                    rendez-vous</a></button>
        </div>
    </div>
</div>