<?php
$etudiants = [0 => "othmane", 1 => "imane", "zineb", "yahya", "zoubair", "Mbodj"];
// la longueur (taille) du tableau : 5 = count($etudiants)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>des tableaux & des boucles </title>
</head>

<body>
    <h2>Afficher les elements du tableau :</h2>
    <table border="1" width="300" align="center">
        <th>Etudiants </th>
        <tr>
            <td><?= $etudiants[0] ?></td>
        </tr>
        <tr>
            <td><?= $etudiants[1] ?></td>
        </tr>
        <tr>
            <td><?= $etudiants[2] ?></td>
        </tr>
        <tr>
            <td><?= $etudiants[3] ?></td>
        </tr>

    </table>
    <h2>Afficher les elements du tableau avec une boucle : for</h2>
    <h3>Liste des <?= count($etudiants) ?> Etudiants </h3>
    <table border="1" width="300" align="center">
        <th>Etudiants </th>


        <?php for ($i = 0; $i < count($etudiants); $i++) { ?>
            <tr>
                <td><?= $i ?> : <?= $etudiants[$i] ?></td>
            </tr>
        <?php } ?>

    </table>
    <h2>Afficher les elements du tableau avec une boucle : foreach</h2>
    <h3>Liste des <?= count($etudiants) ?> Etudiants </h3>
    <table border="1" width="300" align="center">
        <th>Etudiants </th>


        <?php foreach ($etudiants as $c => $e) { ?>
            <tr>
                <td><?= $c ?> : <?= $e ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>