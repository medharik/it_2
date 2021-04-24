<?php
extract($_POST); //$nom,$prenom
setcookie("nom", $nom, time() - 10, '/test');
setcookie("prenom", $prenom, time() - 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter le cookie</title>
</head>

<body>
    <?php if (isset($_COOKIE['age'])) { ?>
        <h2>Votre age est de : <?= $_COOKIE['age']; ?></h2>
    <?php } ?>

    <a href="creer_cookies.php">retour</a>
</body>

</html>