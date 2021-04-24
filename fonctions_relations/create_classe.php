<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle classe</title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow p-3">
                <form action="store_classe.php" method="post">
                    Nom : <input type="text" name="nom">
                    <button class="btn btn-primary btn-sm">Ajouter la classe</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("_js.php"); ?>
</body>

</html>