<?php

// var_dump($_GET);
// print_r($_GET);
if (
    isset($_GET['libelle']) && isset($_GET['prix'])  &&
    isset($_GET['qte'])
    && !empty($_GET['libelle'])
    && !empty($_GET['prix'])
    && !empty($_GET['qte'])
) {



    $libelle = $_GET['libelle'];
    $prix = $_GET['prix'];
    $qte = $_GET['qte'];
    if (is_numeric($prix) && is_numeric($qte)) {
        $tht = $prix * $qte;
    } else {

        header("location:form_get.php?e=nombre");
        die();
    }
} else {
    //redirection vers form_get.php  
    header("location:form_get.php?e=yes");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperation des data</title>
</head>

<body>
    <ul>
        <li>libelle : <?= $libelle ?></li>
        <li> <?= $prix ?>DHS</li>
        <li> <?= $qte ?></li>
    </ul>

</body>

</html>