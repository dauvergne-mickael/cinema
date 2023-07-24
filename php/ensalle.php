<?php 
    include '../templates/header.php';
?>
<?php
    $films = ["Oppeinheimer", "Je suis une légende", "Interstellar", "Mission Impossible", "Indiana Jones"];
?>
<h2 class="page__title">Les films</h2>
<ul>
<?php
    // for résume en 3 étapes ce qu'on fait dans un while
    // for (initialisation; condition de sortie; incrémentation a chaque tour de boucle)

    // for ($index = 0; $index < 5; $index++) {
    //     echo '<li>'.$films[$index].'</li>';
    // }

    // OU ALORS FAIR COMME CA

for ($index = 0; $index < 5; $index++) {
    ?>
<li><?=$films[$index]?></li>
<?php } ?>


</ul>
<?php 
    include '../templates/footer.php';
?>