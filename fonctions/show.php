<?php
include("functions.php");
//recuperer l'id depuis le lien (GET)
$id = $_GET['id'];

$produit = find($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter le produit </title>
</head>

<body>
    <ul>
        <li>Libelle : <?= $produit['libelle'] ?></li>
        <li>Prix : <?= $produit['prix'] ?>DHS</li>
    </ul>
    <a href="index.php">Retourner à la page d'accueil</a>

</body>

</html>