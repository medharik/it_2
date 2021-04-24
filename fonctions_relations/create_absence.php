<?php
include("functions_commun.php");
// $classes = all("classe");
$etudiants = all("etudiant");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle absence </title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow my-3 p-2 mx-auto">
                <div class="alert alert-info">Nouvelle absence</div>
                <form action="store_absence.php" method="post">
                    <div class="mb-3">
                        Date : <input type="datetime-local" name="date_absence" class="form-control">
                    </div>
                    <div class="mb-3">
                        Nombre d'heure : <input type="text" name="nombreHeure" class="form-control">
                    </div>


                    <div class="mb-3">
                        Details : <textarea class="form-control" name="details"></textarea>

                    </div>
                    <div class="mb-3">

                        Etudiant : <select type="text" name="etudiant_id">
                            <?php foreach ($etudiants as $e) { ?>
                                <option value="<?= $e['id'] ?>">
                                    <?= $e['nom'] ?> <?= $e['prenom'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3 text-center">

                        <button class="btn btn-primary">Ajouter l'absence</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("_js.php"); ?>
</body>

</html>