<?php
//store , delete et update
include("functions_commun.php");
extract($_POST); //$nom=$_POST['nom'] creer des variable (ayant le nom de name dans form) contenant les valeurs du form
extract($_GET); //?id=10&action=store => $_GET =['id'=>10,'action'=>'store']=>$id=10, $action='store',$table
$vue = "index.php";
if ($table == "etudiant") {
    $vue = "index_etudiant.php";
}
if ($table == "classe") {
    $vue = "index.php";
}
if ($table == "absence") {
    $vue = "index_absence.php";
}
switch ($action) {
    case 'store':
        if ($table == 'classe') {
            ajouter_classe($nom);
        } else if ($table == "etudiant") {

            $chemin = uploader($_FILES['chemin']);
            ajouterEtudiant($nom, $prenom, $genre, $classe_id, $chemin);
        } else if ($table == "absence") {
            ajouterAbsence($date_absence, $nombreHeure, $etudiant_id, $details);
        }

        break;
    case 'delete':
        supprimer($id, $table);
        break;
    case 'update':
        if ($table == "etudiant") {
            // print_r($_FILES['chemin']);
            if ($_FILES['chemin']['size'] != 0) {
                $chemin = uploader($_FILES['chemin']);
                modifierEtudiant($nom, $prenom, $genre, $classe_id, $chemin, $id);
            } else { //l'user n'pas choisit d'image
                modifierEtudiantSansChemin($nom, $prenom, $genre, $classe_id, $id);
            }
        }
        break;
    default:
        echo "Erreur";
}
header("location:$vue");
