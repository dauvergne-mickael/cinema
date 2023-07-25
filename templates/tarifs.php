<section>
  <h2 class="page__title">Tarifs</h2>
  <div class="prices__lists">

    <div class="prices__list">
      <h3 class="prices__list-title">
        A l'unité
      </h3>
      <ul>
      <?php 
          foreach ($tarifs as $key => $value) {
            echo '<li class="prices__item">'.
                '<span class="prices__item-desc">' . $key . '</span>'.
                '<span class="prices__item-value">'. $value . ' €' . '</span>'.
                '</li>';             
          }
      ?>
      </ul>
    </div>

    <div class="prices__list">
      <h3 class="prices__list-title">
        Abonnement
      </h3>
      <ul>
        <li class="prices__item">
          <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
        </li>
        <li class="prices__item">
          <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
        </li>
      </ul>
    </div>
  </div>

  <div class="prices__description">
    <p class="prices__description-line">
      <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
    </p>
    <p class="prices__description-line">
      <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
    </p>
  </div>
</section>

<section>
  <h2 class="page__title">Tarif du capitaine</h2>

  <div class="prices__list">
    <h3 class="prices__list-title">
      <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
    </h3>
    <ul>
      <li class="prices__item">
        <?php
        $ageCapitaine = 43;
        $montantCapitaine = 8.3;
        ?>
        <span class="prices__item-desc"><?php echo $ageCapitaine; ?> ans</span> <span class="prices__item-value"><?= $montantCapitaine ?> &euro;</span>
      </li>
    </ul>
  </div>

</section>

<section>
  <h2 class="page__title">Tarif âge par âge</h2>

  <div class="prices">
    <div class="prices__list">
      <h3 class="prices__list-title">
        <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        <span class="prices__item-sub">Tarif Abonné</span>
      </h3>
      <ul>
        <?php
        while ($age < 99) { ?>
       
          <?php $age++; ?>
         
          <?php if ($age < 14) {
            $montant = $tarifEnfant;
          }elseif ($age <= 16 || $age >= 60) {
            $montant = $tarifReduit;
          }else {
            $montant = $tarifPlein;
          }
          $prixTotal = 5 * $montant;
 
          if ($age > 25) {
            $montantAbo = $prixTotal * (1 - 0.10);
          }
          else {
            $montantAbo = $prixTotal * (1 - 0.20);
          }
          ?>
          <li class="prices__item">
            <?php //Ici j'affiche l'age a chaque iteration (iteration = tour de boucle) 
            ?>
            <span class="prices__item-desc"><?= $age ?> ans</span>
            <?php //Ici j'affiche le montant a chaque iteration 
            ?>
            <span class="prices__item-value"><?= $montant ?> &euro;</span>
            <span class="prices__item-sub"><?= $montantAbo ?> &euro;</span>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <section>
    <h2 class="page__title">Consommation</h2>

    <div class="prices__list">
      <h3 class="prices__list-title">
        <span class="prices__item-desc" style=max-width:110px;>Produit</span>
        <span class="prices__item-desc" style=max-width:120px;>Format</span>
        <span class="prices__item-value" style=max-width:110px;>Tarif</span>
      </h3>
      <ul style=max-width:360px;>
        <?php
        for ($prod = 0; $prod < 6; $prod++) {
 
          echo
          '<li class="prices__item">'
            . '<span class="prices__item-desc">' . $extras[$prod][0] . '</span>'
            . '<span class="prices__item-desc">' . $extras[$prod][1] . '</span>'
            . '<span class="prices__item-value"">' . $extras[$prod][2] . ' € </span>'
            . '</li>';
        }
        ?>
      </ul>
    </div>
  </section>