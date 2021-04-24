<?php 
include("functions_commun.php");
$classes=all("classe");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create etudiant</title>
</head>

<body>
    <form action="controller.php?action=store&table=etudiant" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="genre" placeholder="genre">
        <select type="text" name="classe_id" >
<?php foreach($classes as $c) {?>
            <option value="<?=$c['id']?>"><?=$c['nom']?></option>
        <?php } ?>
        
        </select>
        <input type="file" name="chemin">
        <button>ajouter</button>
    </form>

</body>

</html>