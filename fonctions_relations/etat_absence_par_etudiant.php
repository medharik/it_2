<?php
include("functions_commun.php");
$id = $_GET['id'];
$resultat = findByCondition("absence", "etudiant_id=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat d'absence de HARIT</title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>
    <h3 class="text-center text-primary">Etat d'absence de HARIT</h3>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date d'absence</th>
                    <th>Total d'heure</th>
                    <th>Details</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultat as $l) { ?>
                    <tr>
                        <td><?= $l['id'] ?></td>
                        <td><?= $l['date_absence'] ?></td>
                        <td><?= $l['nombreHeure'] ?></td>
                        <td><?= $l['details'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include("_js.php"); ?>
</body>

</html>