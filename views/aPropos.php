<div class="container-fluid" id="aPropos">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">
      <h1 class="display-4 text-center mt-3 mb-3">Où nous trouver ?</h1>
      <p class="lead text-center mt-3 mb-3">Nous sommes situés au 5 Allée des Salomons, 74000 Annecy. Venez nous rendre
        visite pour une expérience de coiffure exceptionnelle !</p>
      <iframe class="w-100 border border-graphite border-1 rounded"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.1089102919946!2d6.134832812293002!3d45.90913230352101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b8feced3470db%3A0xefe3fae38dfe252b!2s5%20All.%20des%20Salomons%2C%2074000%20Annecy!5e0!3m2!1sfr!2sfr!4v1780321249152!5m2!1sfr!2sfr"
        height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">
      <h1 class="display-4 text-center mt-3 mb-3">Rencontrez notre équipe</h1>
      <p class="lead text-center mt-3 mb-3">Découvrez notre équipe de professionnels passionnés et dédiés à votre
        satisfaction.</p>
      <div class="card bg-dustytaupe1 text-center p-2 border border-graphite mt-3" style="width: auto;">
        <div class="card-title">
          <h2>Nos Collaborateurs</h2>
        </div>
        <hr style="background-color: white; height: 2px; border: none;">
        <div class="container-fluid">
          <div class="row  justify-content-start">
            <?php
            $equipe = array(
              "Redouane" => "R",
              "Râbée" => "R",
              "Mohamed" => "M",
            );
            ?>
            <?php foreach ($equipe as $nom => $initiale) { ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mb-3 d-flex flex-column align-items-center">
                <div class="bg-graphite"
                  style="font-size:24px; color:#FFFFFF; border-radius:50%; height:64px; width:64px; display:flex; align-items:center; justify-content:center;">
                  <?= $initiale ?>
                </div>
                <div class="mt-2 fw-bold">
                  <?= $nom ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row justify-content-center mt-3 mb-3">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <h1 class="display-4 text-center mb-3">À propos de nous</h1>
        <div class="card bg-dustytaupe1 text-center p-2 border border-graphite" style="width: auto;">
          <div class="card-title">
            <h2>TM-Coiffure</h2>
          </div>
          <hr style="background-color: white; height: 2px; border: none;">
          <p>Bienvenue chez TM Coiffure, votre salon de coiffure situé au cœur d'Annecy. Notre équipe de professionnels
            passionnés met son savoir-faire et sa créativité à votre service pour révéler votre style et sublimer votre
            personnalité.<br></p>

          <p>
            Chez TM Coiffure, nous accordons une grande importance à la qualité de nos services. C'est pourquoi nous
            utilisons des produits professionnels sélectionnés avec soin pour préserver la santé et la beauté de vos
            cheveux. Notre équipe se forme régulièrement aux dernières tendances et techniques afin de vous proposer des
            prestations modernes et personnalisées.<br>
          </p>

          <p>
            Faites confiance à TM Coiffure à Annecy pour prendre soin de vos cheveux et vous accompagner dans toutes vos
            envies de changement ou d'entretien. Votre satisfaction est notre priorité, et nous mettons tout en œuvre
            pour
            vous garantir un résultat qui vous ressemble.<br></p>

          <p>TM Coiffure, l'expertise et la passion au service de votre beauté.</p>
        </div>
      </div>
    </div>
  </div>
</div>