<?php
include("functions_commun.php");
include("functions_classe.php");
$absences = absenceParEtudiant();
// print_r($resultat);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des classes</title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <h2 class="text-center text-success my-3">Liste des <?= count($absences) ?> absence<?= (count($absences) > 1) ? "s" : ""  ?></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Etudiant</th>
                    <th>Date </th>
                    <th>Nombre d'heure </th>
                    <th>Details </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($absences as $ligne) { ?>

                    <tr>
                        <td><?= $ligne['id'] ?></td>
                        <td><?= $ligne['nom'] ?> <?= $ligne['prenom'] ?></td>
                        <td><?php


                            $date = new DateTime($ligne['date_absence']);
                            echo $date->format('d-m-Y H:i:s');


                            ?><br>
                            il y a <?php
                                    $current_time = new DateTime();
                                    $interval = $current_time->diff($date);
                                    echo  $interval->format('%m mois, %d jour');
                                    ?>
                        </td>
                        <td><?= $ligne['nombreHeure'] ?></td>
                        <td><?= $ligne['details'] ?></td>

                        <td>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Supprimer?')" href="delete_classe.php?id=<?= $ligne['id'] ?>">Supprimer</a>
                            <a class="btn btn-sm btn-warning" href="edit_classe.php?id=<?= $ligne['id'] ?>">Modifier</a>
                            <a class="btn btn-sm btn-info" href="show_classe.php?id=<?= $ligne['id'] ?>">Consulter</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include("_js.php") ?>
</body>

</html>