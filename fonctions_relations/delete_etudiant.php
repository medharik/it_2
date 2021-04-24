<?php
include("functions_commun.php");

$id = $_GET['id'];
//recuperer le chemin de sa photo 
$etudiant = find($id, "etudiant");
$chemin = $etudiant['chemin'];
unlink($chemin);
supprimer($id, "etudiant");
header("location:index_etudiant.php");
