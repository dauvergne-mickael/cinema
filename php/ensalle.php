<?php 
    include '../templates/header.php';
?>
<?php
    $films = ["Oppeinheimer", "Je suis une légende", "Interstellar", "Mission Impossible", "Indiana Jones"];
    $rooms = ["Athéna", "Dyonisos","Hadès", "Zeus" ];
?>

<h2 class="page__title">Les films</h2>
<ul>    
    <?php
    for ($index = 0; $index < 5; $index++) {
    ?>
    <li><?=$films[$index]?></li>
    <?php } ?>
</ul>


<h2 class="page__title">Salles</h2>
<ul>
   <?php
    for ($i=0; $i <4 ; $i++) { 
   
    echo " <li>$rooms[$i]</li>";    
    } 
    ?> 
</ul>


<?php 
    include '../templates/footer.php';
?>

