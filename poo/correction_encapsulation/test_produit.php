<?php
include "produit.class.php";
//instancier un objet hp de la classe produit
$hp = new Produit("hp dv 8", 1000, 10);
$hp->set_qte_stock(100);
$hp->set_prix(2000);
$hp->afficher();
if ($hp->exists()) {
    echo "ce produit est en stock<br>";
} else {
    echo "ce produit n'est plus en stock<>br";
}

$p = $hp->calculer_ptc();
echo "le prix TC est " . $p . "$";
