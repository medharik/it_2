<?php
// details.php?id=1&nom=xavi
// echo  $_GET['id'], '<br>'; //1
// echo $_GET['nom']; //xavi
$id = $_GET['id']; //recuperer l'id depuis le lien (id=1) depuis  le lien
$infos = [
    1 =>  ['libelle' => 'Tshirt XAVI', 'image' => 'media/t1.webp', 'prix' => 500, 'descriptions' => 'Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet '],
    2 => ['libelle' => 'Tshirt CR7', 'image' => 'media/t2.jpg', 'prix' => 600, 'descriptions' => 'Tshort Ronaldo lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet '],
    3 => ['libelle' => 'Tshrt Messi', 'image' => 'media/t3.jpg', 'prix' => 700, 'descriptions' => 'Tshort messi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet Tshort xavi lorem ipsum dolor set amet '],
];
$produit = $infos[$id];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details du produit ....</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= $produit['image'] ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 bg-light ">

                <h3><?= $produit['libelle'] ?> </h3>
                <h3><?= $produit['prix'] ?>$</h3>
                <p>
                    <?= $produit['descriptions'] ?>
                </p>

            </div>
        </div>


    </div>


</body>

</html>