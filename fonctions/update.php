<?php
require("functions.php");
//recuperer les donnees recus depuis le forms
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$id = $_POST['id'];
modifierProduit($libelle, $prix, $id);
header("location:index.php");
