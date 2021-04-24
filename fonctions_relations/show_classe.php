<?php
include("functions_commun.php");
include("functions_classe.php");
//recuperer l'id depuis le lien (GET)
$id = $_GET['id'];

$classe = find($id, "classe");
$etudiants = findByCondition("etudiant", "classe_id=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter le classe </title>
    <?php include("_css.php"); ?>
</head>

<body>
    <ul>
        <li>Libelle : <?= $classe['nom'] ?></li>
    </ul>

    <a href="#" onclick="history.go(-1)">Retourner à la page d'accueil</a>
    <h2 class="text-center text-success">Liste des etudiants de classe : <?= $classe['nom'] ?></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom & prenom</th>
                <th>genre </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $ligne) { ?>

                <tr>
                    <td><?= $ligne['id'] ?></td>
                    <td><?= $ligne['nom'] ?> <?= $ligne['prenom'] ?></td>
                    <td><?= $ligne['genre'] ?></td>
                    <td>
                        <a onclick="return confirm('Supprimer?')" href="delete_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-danger">Supprimer</a>
                        <a href="edit_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-warning">Modifier</a>
                        <a href="show_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-info">Consulter</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>