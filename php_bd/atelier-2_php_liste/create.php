<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php
    include("_menu.php");

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow mx-auto p-2 mt-1">
                <form action="store.php" method="post">
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libelle</label>
                        <input type="text" name="libelle" class="form-control" id="libelle">
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" name="prix" class="form-control" id="prix">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">
                            Ajouter le produit
                        </button>
                    </div>


                </form>
            </div>
        </div>


    </div>
</body>

</html>