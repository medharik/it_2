<?php
include("functions.php");
$resultat = all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>prix</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($resultat as $ligne) { ?>
            <tr>
                <td><?= $ligne['id'] ?></td>
                <td><?= $ligne['libelle'] ?></td>
                <td><?= $ligne['prix'] ?></td>
                <td>
                    <a href="delete.php?id=<?= $ligne['id'] ?>">Supprimer</a>
                    <a href="show.php?id=<?= $ligne['id'] ?>">Consulter</a>
                    <a href="edit.php?id=<?= $ligne['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>