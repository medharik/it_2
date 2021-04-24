<?php
include("functions_commun.php");
include("functions_etudiant.php");
$resultat = etudiant_classe_somme();
// print_r($resultat);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">

        <h2 class="text-center text-success my-3">Liste des <?= count($resultat) ?> etudiant<?= (count($resultat) > 1) ? "s" : ""  ?></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Photo</th>
                    <th>Nom & prenom</th>
                    <th>genre </th>
                    <th>classe</th>
                    <th>Total absence </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultat as $ligne) { ?>

                    <tr>
                        <td><?= $ligne['id'] ?></td>
                        <th><img src="<?= $ligne['chemin'] ?>" alt="" width="150"></th>
                        <td><?= $ligne['nom'] ?> <?= $ligne['prenom'] ?></td>
                        <td><?= $ligne['genre'] ?></td>
                        <td><?= $ligne['nom_classe'] ?></td>
                        <td><?= $ligne['somme_absence'] ?></td>
                        <td>
                            <a onclick="return confirm('Supprimer?')" href="delete_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-danger">Supprimer</a>
                            <a href="edit_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-warning">Modifier</a>
                            <a href="show_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-info">Consulter</a>
                            <a href="etat_absence_par_etudiant.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-primary">Etat d'absence</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include("_js.php") ?>
</body>

</html>