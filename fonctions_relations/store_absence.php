<?php
include("functions_commun.php");
include("functions_absence.php");
//recuperer les donnees depuis le form (post)
// $nombreHeure = $_POST['nombreHeure'];
// $details = $_POST['details'];
// $etudiant_id = $_POST['etudiant_id'];
//OU 
extract($_POST); // creer les variables $nombreHeure, $details,.. et y mettre les valeurs du forms
//ajouter l'absence dans la table absence 
ajouter_absence($nombreHeure, $details, $etudiant_id, $date_absence);
header("location:index_absence.php");
