<?php
$erreur = "";
if (isset($_GET['m']) && $_GET['m'] == 'no') {
    $erreur = "Produit introuvable";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passage des donnees </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container p-2" style="min-height:100px">
        <?php if ($erreur != "") { ?>
            <div class="alert alert-danger">
                <?= $erreur ?>
            </div>
        <?php } ?>
        <section id="recherche" class="row">
            <div class="col-md-6  mx-auto">
                <form action="details.php">
                    <div class="mb-3">
                        <label for="id" class="form-label">Recherche par ID :</label>
                        <input type="text" name="id" id="id" class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-primary col-md-12">Valider</button>
                    </div>
                </form>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>