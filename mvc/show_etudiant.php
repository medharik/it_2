<?php
include("functions_commun.php");
$id = $_GET['id'];
$etd = find($id, "etudiant");
$classe_id = $etd['classe_id'];
$classe = find($classe_id, "classe");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter un etudiant</title>
</head>

<body>
    <ul>
        <li>ID : <?= $etd['id'] ?></li>
        <li>classe : <?= $classe['nom'] ?></li>
        <li> <?= $etd['nom'] ?> <?= $etd['prenom'] ?></li>
        <li>
            <img src="<?= $etd['chemin'] ?>" width="200">
        </li>
    </ul>
    <a href="controller.php?id=<?= $etd['id'] ?>&action=delete&table=etudiant">Supprimer</a>
    <br>
    <a href="edit_etudiant.php?id=<?= $etd['id'] ?>">Editer</a><br>
    <a href="index_etudiant.php">Liste des etudiants</a>

</body>

</html>