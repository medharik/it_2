<?php
include("functions.php");
$resultat = all();
// print_r($resultat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>

<body>
    <h2>Liste des <?= count($resultat) ?> produit<?= (count($resultat) > 1) ? "s" : ""  ?></h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Libelle</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultat as $ligne) { ?>

                <tr>
                    <td><?= $ligne['id'] ?></td>
                    <td><?= $ligne['libelle'] ?></td>
                    <td><?= $ligne['prix'] ?></td>
                    <td>
                        <a onclick="return confirm('Supprimer?')" href="delete.php?id=<?= $ligne['id'] ?>">Supprimer</a>
                        <a href="edit.php?id=<?= $ligne['id'] ?>">Modifier</a>
                        <a href="show.php?id=<?= $ligne['id'] ?>">Consulter</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

</body>

</html>