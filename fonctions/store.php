<?php
require("functions.php");
//recuperer les donnees recus depuis le forms
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];

// appeler : ajouterProduit
ajouterProduit($libelle, $prix);
