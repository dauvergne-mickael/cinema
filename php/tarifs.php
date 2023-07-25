<?php 

$extras = [
  [
    'Popcorn',
    'L',
    2.9
  ],
  [
    'Popcorn',
    'XL',
    4
  ],
  [
    'Chips',
    '50g',
    2.5
  ],
  [
    'M&M\'s',
    '100g',
    4
  ],
  [
    'Soda',
    '33cl',
    3.2
  ],
  [
    'Evian',
    '33cl',
    3
  ]
];

$tarifs = [
  "Tarif Plein" => 8.3,
  "Tarif Réduit" => 6.8,
  "Tarif Enfant" => 4.5,
  "Supplément 3D" => 1
];


$age = 0;
$tarifPlein = 8.3;
$tarifReduit = 6.8;
$tarifEnfant = 4.5;
$montant = 0;


  include "../templates/header.php";  
  include "../templates/tarifs.php";
  include "../templates/footer.php";
  ?>

