
<?php 
include("functions_commun.php");
$etudiants=all("etudiant");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create absence</title>
</head>

<body>
    <form action="controller.php?action=store&table=absence" method="post" enctype="multipart/form-data">
        <input type="datetime-local" name="date_absence" placeholder="date absence">
        <input type="number" name="nombreHeure" placeholder="nombre heure">
        <select type="text" name="etudiant_id" placeholder="etudiant_id">
        <option value="" selected>....</option>
        <?php foreach($etudiants as $e) {?>
        <option value="<?=$e['id']?>"><?=$e['nom']?> <?=$e['prenom']?></option>
        <?php } ?>
        </select>
        <textarea type="text" name="details" placeholder="details id"></textarea>
        <button>ajouter</button>
    </form>

</body>

</html>