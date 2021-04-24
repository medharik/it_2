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
    <title> Edition du produit</title>
</head>

<body>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $produit['id'] ?>">
        Libelle : <input type="text" name="libelle" value="<?= $produit['libelle'] ?>">
        Prix : <input type="number" name="prix" value="<?= $produit['prix'] ?>">
        <button>Modifier le produit</button>
    </form>
</body>

</html>