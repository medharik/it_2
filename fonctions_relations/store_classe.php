<?php
require("functions_commun.php");
require("functions_classe.php");
//recuperer les donnees recus depuis le forms
$nom = $_POST['nom'];
ajouterClasse($nom);
header("location:index_classe.php");
