<?php
include("functions.php");
$libelle = $_POST['libelle']; // id=4
$prix = $_POST['prix']; // id=4
ajouter($libelle, $prix);
header("location:index.php");
