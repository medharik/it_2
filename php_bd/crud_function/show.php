<?php
include("functions.php");
$id = $_GET['id']; // id=4
$produit = find($id);
// header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    les informations du produit :
    <h3>LIbelle : <?= $produit['libelle'] ?></h3>
    <h3>Prix : <?= $produit['prix'] ?></h3>
</body>

</html>