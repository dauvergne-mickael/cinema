<?php 
// Ci dessus j'ouvre une balise PHP pour pouvoir traiter du PHP dans mon fichier
// Ci dessous, j'inclus le fichier header.php qui est dans le dossier templates.
// Ce fichier header.php contient La balise <head> ainsi que le header avec la navbar
// On s'arrete a la balise <main> ouvrante pour pouvoir traiter le contenu de la page dans chaque fichier php. 
    include "../templates/header.php";
?>
<section>
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
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
          </h3>
          <ul>
            <?php
            // Ci dessous j'initialise ma variable $age 
            $age = 0;
            // J'initialise mes 3 variable tarifPlein, tarifReduit, tarifEnfant.
            $tarifPlein = 8.3;
            $tarifReduit = 6.8;
            $tarifEnfant = 4.5;
            // J'initialise à 0 ma variable montant.
            $montant = 0;

            // Ensuite je mets en place ma boucle qui va checker si a chaque itération $age est toujours inferieur a 99
            // Cette boucle va me permettre d'afficher tous les ages de 1 a 99
            while ($age < 99) { ?>
            <?php // Ici j'incremente ma vriable $age ?>
            <?php $age++; ?>
            <?php 
            // Ici je verifie si age est inferieur a 14 pour checker si je dois appliquer le tarif enfant ou non ?>
            <?php if ($age < 14) {
                $montant = $tarifEnfant;
            }
            // Ici je verifie si age est inferieur/egal a 16 ou si age est superieur/egal a 60 pour checker si je dois appliquer le tarif reduit ou non
            elseif ($age <= 16 || $age >= 60) {
                $montant = $tarifReduit;
            } 
            // Sinon dans tous les autres cas j'applique le plein tarif
            else {
                $montant = $tarifPlein;
            }
             ?>
            <li class="prices__item">
                <?php //Ici j'affiche l'age a chaque iteration (iteration = tour de boucle) ?>
              <span class="prices__item-desc"><?= $age ?> ans</span> 
              <?php //Ici j'affiche le montant a chaque iteration ?>
              <span class="prices__item-value"><?= $montant?> &euro;</span>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>

    </section>
<?php 
// Ci dessous j'inclus le fichier footer.php qui est dans le dossier templates.
// Ce fichier contient le footer de chacune de mes pages ainsi que la balsie <main> fermante
    include "../templates/footer.php";
?>