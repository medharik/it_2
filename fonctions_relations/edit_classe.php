<?php
include("functions_commun.php");
include("functions_classe.php");
//recuperer l'id depuis le lien (GET)
$id = $_GET['id'];

$classe = find($id, "classe");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edition du classe</title>
</head>

<body>

    <form action="update_classe.php" method="post">
        <input type="hidden" name="id" value="<?= $classe['id'] ?>">
        Nom : <input type="text" name="nom" value="<?= $classe['nom'] ?>">
        <button>Modifier</button>
    </form>
</body>

</html>