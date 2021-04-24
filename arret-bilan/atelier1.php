<?php
//stocker des donnees (nom,prenom & age ) des variables  
$nom = "harik";
$prenom = "mohamed";
$age = 14;
$afficher_majorite = true;
$maj = "majeur";
if ($age < 18) {
    $maj = "mineur";
}
$genre = "homme";
$classe = "ho";
if ($genre == "femme") {
    $classe = "fe";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATELIER 1 </title>
    <style>
        .ho {
            background: blue;
            color: white;
        }

        .fe {
            background: pink;
            color: red;
        }
    </style>
</head>

<body class="<?= $classe ?>">
    <h1>Les variables / conditions et affichage</h1>
    <h3>Methode 1 </h3>
    <ul>
        <li>Nom : <?php echo $nom; ?> </li>
        <li>Prenom : <?= $prenom  ?></li>
        <li>Age : <?= $age ?>ANS </li>
        <li>Vous etes : <?= $maj ?> </li>
    </ul>
    <h3>Methode 2 </h3>
    <ul>
        <li>Nom : <?php echo $nom; ?> </li>
        <li>Prenom : <?= $prenom  ?></li>
        <li>Age : <?= $age ?>ANS </li>

        <li>Vous etes : <?php
                        if ($age > 18) {
                            echo "Majeur";
                        } else {
                            echo  "Mineur";
                        }

                        ?></li>

    </ul>
    <h2>affichage selon une condition</h2>
    <?php if ($afficher_majorite) { ?>
        <h3>Vous etes <?= $maj ?></h3>
    <?php } ?>
</body>

</html>