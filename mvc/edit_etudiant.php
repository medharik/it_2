<?php
include("functions_commun.php");
$classes = all("classe");
$id = $_GET['id'];
$etudiant = find($id, "etudiant");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit etudiant</title>
</head>

<body>
    <form action="controller.php?action=update&table=etudiant" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <input type="text" name="nom" placeholder="nom" value="<?= $etudiant['nom'] ?>">
        <input type="text" name="prenom" placeholder="prenom" value="<?= $etudiant['prenom'] ?>">
        <input type="text" name="genre" placeholder="genre" value="<?= $etudiant['genre'] ?>">
        l'id de la classe est <?= $etudiant['classe_id'] ?>
        <select type="text" name="classe_id">
            <?php foreach ($classes as $c) { ?>

                <option value="<?= $c['id'] ?>" <?php if ($c['id'] == $etudiant['classe_id']) echo "selected" ?>>

                    <?= $c['nom'] ?>

                </option>
            <?php } ?>

        </select>
        <input type="file" name="chemin">
        <button>Modifier</button>
    </form>

</body>

</html>