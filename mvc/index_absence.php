
<?php
include("functions_commun.php");
$absences =absenceetetudiant();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
</head>
<body>
<table>
    <tr>
        <td>id</td>
        <td>etudiant</td>
        <td>date </td>
        <td>nombre heure</td>
        <td>details</td>
        <td>actions</td>
    </tr>

<?php foreach($absences as $e) {?>
    <tr>
        <td><?=$e['id']?></td>
        <td><?=$e['nom']?>  <?=$e['prenom']?> </td>
        <td><?=$e['date_absence']?></td>
        <td><?=$e['nombreHeure']?></td>
        <td><?=$e['details']?></td>
        <td><a href="controller.php?id=<?=$e['id']?>&action=delete&table=absence">Supprimer</a></td>
    </tr>
<?php } ?>

</table>
    
</body>
</html>