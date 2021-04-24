<?php
include("functions_commun.php");
$nom = $_POST['nom'];
$infos = $_FILES['chemin'];
$tmp = $infos['tmp_name'];
$chemin = "uploads/" . $infos['name'];
move_uploaded_file($tmp, $chemin);
ajouter_person($nom, $chemin);
header("location:index_person.php");
