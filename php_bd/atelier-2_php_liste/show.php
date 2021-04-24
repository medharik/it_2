<?php
//recuperer l'id depuis le lien (get)
$id = $_GET['id'];

//connexion avec la base de donnees sur mysql
$dbh = new PDO('mysql:host=localhost;dbname=db11', "root", "");
//prepration d'une requete SQL 
$rp = $dbh->prepare("select * from produit where id=$id");
// DRY : dont repeat yourself
//execution de la requete SQL
$rp->execute();
//fetch

$produit = $rp->fetch();
// print_r($produit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details du produit : <?= $produit['libelle'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <?php
    include("_menu.php");

    ?>
    <div class="container">
        <div class="card mx-auto" style="width: 18rem;">
            <img src="https://placehold.it/300x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $produit['libelle'] ?></h5>
                <p class="card-text"><?= $produit['prix'] ?>$</p>
                <a href="index.php" class="btn btn-primary">Liste des produits</a>
            </div>
        </div>
    </div>

</body>

</html>