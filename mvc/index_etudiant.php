<?php
include("functions_commun.php");
$etudiants = all("etudiant");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
</head>

<body>
    <table>
        <tr>
            <td>id</td>
            <td>Nom & prenom</td>
            <td>image</td>
            <td>classe</td>
            <td>actions</td>
        </tr>

        <?php foreach ($etudiants as $e) { ?>
            <tr>
                <td><?= $e['id'] ?></td>
                <td><?= $e['nom'] ?> <?= $e['prenom'] ?></td>
                <td><img src="<?= $e['chemin'] ?>" height="100"></td>
                <td><?= $e['classe_id'] ?></td>
                <td>
                    <a href="controller.php?id=<?= $e['id'] ?>&action=delete&table=etudiant">Supprimer</a>
                    <a href="edit_etudiant.php?id=<?= $e['id'] ?>">Editer</a>
                    <a href="show_etudiant.php?id=<?= $e['id'] ?>">Consulter</a>

                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>