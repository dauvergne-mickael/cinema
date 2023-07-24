<?php 
// Ci dessus j'ouvre une balise PHP pour pouvoir traiter du PHP dans mon fichier
// Ci dessous, j'inclus le fichier header.php qui est dans le dossier templates.
// Ce fichier header.php contient La balise <head> ainsi que le header avec la navbar
// On s'arrete a la balise <main> ouvrante pour pouvoir traiter le contenu de la page dans chaque fichier php. 
    include "../templates/header.php";
?>
    <section>
      <h2 class="page__title">Bienvenue au Cinéma Rodia</h2>
    </section>
    <?php 
// Ci dessous j'inclus le fichier footer.php qui est dans le dossier templates.
// Ce fichier contient le footer de chacune de mes pages ainsi que la balsie <main> fermante
    include "../templates/footer.php";
?>