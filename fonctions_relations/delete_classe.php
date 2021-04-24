<?php
include("functions_commun.php");
include("functions_classe.php");
//recuperer l'id depuis le lien (GET)
$id = $_GET['id'];
// $id = $_GET['libelle'];
//appelerer supprimerProduit
supprimer($id, "classe");
// header("location:index_classe.php");
