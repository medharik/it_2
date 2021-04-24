<?php
require("functions_commun.php");
require("functions_etudiant.php");
// //recuperer les donnees recus depuis le forms
// print_r($_POST); //data envoyées 
// print_r($_FILES['chemin']);
extract($_POST); //$nom=$_POST['nom']

echo "<hr>";
$infos = $_FILES['chemin']; //5 data sur le fichier : name , size , error , tmp_name, type
$chemin = uploader($infos);
ajouterEtudiant($nom, $prenom, $genre, $classe_id, $chemin);
header("location:index_etudiant.php");
