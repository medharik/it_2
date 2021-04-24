<?php
// print_r($_GET);
$stock = [
    1 => ['libelle' => 'hp dv 6', 'prix' => 5000, 'image' => 'hp.jfif'],
    2 => ['libelle' => 'dell d5', 'prix' => 6000, 'image' => 'dell.jfif'],
    3 => ['libelle' => 'acer a5', 'prix' => 8000, 'image' => 'acer.png'],
];
$id = $_GET['id'];
if (!isset($stock[$id])) header("location:catalogues.php?m=no"); //redirection vers catalogues.php
$produit = $stock[$id];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS DU PRODUIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/<?= $produit['image'] ?>" alt="..." class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produit['libelle'] ?></h5>
                        <p class="card-text"><small class="text-muted"><?= $produit['prix'] ?>$</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>