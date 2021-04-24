<?php
include("functions.php");
//recuperer l'id depuis le lien (GET)
$id = $_GET['id'];
// $id = $_GET['libelle'];
//appelerer supprimerProduit
supprimerProduit($id);
header("location:index.php");
