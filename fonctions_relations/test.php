<?php

include("functions.php");
$total = ptc(100, 20);
echo "le ptc est $total DHS<br>";
$total = ptc(1000, 10);

echo "le ptc est $total DHS<br>";
$date = afficher_date_actuel();
echo "Date actuelle est $date";
