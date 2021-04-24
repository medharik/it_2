<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow border p-2 mx-auto mt-5">
                <form action="b.php">
                    <div class="mb-2">
                        <label for="prix" class="form-label">Prix : </label>
                        <input type="text" class="form-control" id="prix" name="prix">
                    </div>
                    <div class="mb-2">
                        <label for="qte" class="form-label">Quantite : </label>
                        <input type="text" class="form-control" id="qte" name="qte">
                    </div>
                    <div class="mb-2 form-check form-switch">
                        <label for="tva" class="form-check-label">TTC : </label>
                        <input type="checkbox" class="form-check-input" id="tva" name="tva" value="ttc">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>


                </form>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>