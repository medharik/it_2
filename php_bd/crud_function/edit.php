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
    <title>Edition du produit </title>
</head>

<body>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $produit['id'] ?>">
        <input type="text" value="<?= $produit['libelle'] ?>" name="libelle" placeholder="Libelle ">
        <input name="prix" value="<?= $produit['prix'] ?>" type="text" placeholder="prix">
        <button>Modifier</button>

    </form>

</body>

</html>