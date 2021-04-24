<?php

//$_GET  :  c'est une variable implicite (creee par l'environnement PHP ) (ou superglobale)
//cad php va creer un tableau associatif contenant les valeurs transmises a cette page 
print_r($_GET);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destination</title>
</head>

<body>

    <h3>Le libellé est : <?= $_GET['lib'] ?></h3>
    <h3>Le pridx est : <?= $_GET['prix'] ?></h3>
</body>

</html>