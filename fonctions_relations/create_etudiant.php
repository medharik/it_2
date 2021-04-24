<?php
include("functions_commun.php");
include("functions_classe.php");
$classes = all("classe");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau étudiant</title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow my-3 p-2 mx-auto">
                <div class="alert alert-info">Nouvel etudiant</div>
                <form action="store_etudiant.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        Nom : <input type="text" name="nom" class="form-control">
                    </div>

                    <div class="mb-3">
                        prenom : <input type="text" name="prenom" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            Homme : <input class="form-check-input" type="radio" name="genre" value="homme">
                        </div>
                        <div class="form-check form-switch">
                            Femme : <input class="form-check-input" type="radio" name="genre" value="Femme">
                        </div>
                    </div>
                    <div class="mb-3">
                        Photo : <input type="file" name="chemin" id="chemin">
                    </div>
                    <div class="mb-3">

                        Classe_id <select name="classe_id" class="form-control">


                            <?php foreach ($classes as $ligne) { ?>
                                <option value="<?= $ligne['id'] ?>"><?= $ligne['nom'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="mb-3 text-center">

                        <button class="btn btn-primary">Ajouter la etudiant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("_js.php"); ?>
</body>

</html>