<?php
include("functions_commun.php");
$classes = all("classe");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des classes</title>
</head>

<body>
    <table border="1" width="80%" align="center">
        <tr>
            <td>id</td>
            <td>Nom</td>
            <td>action</td>
        </tr>
        <?php foreach ($classes as $c) { ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['nom'] ?></td>
                <td>
                    <a href="controller.php?action=delete&id=<?= $c['id'] ?>&table=classe">S</a>
                    <a href="controller.php">M</a>
                    <a href="controller.php">C</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>