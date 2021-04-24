<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfert de donnees </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <form action="destination.php">
            <div class="row">
                <div class="col-md-6  mt-3 mx-auto shadow">
                    <div class="mb-2">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" class="form-control" id="libelle" name="lib">
                    </div>
                    <div class="mb-2">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="text" class="form-control" id="prix" name="prix">
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="x" name="conf" value="confirmé">
                        <label class="form-check-label" for="x">Default switch checkbox input</label>

                    </div>
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-primary col-md-6">Valider</button></div>
                </div>
            </div>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>