<?php

//$_GET
print_r($_GET);

$prix = $_GET['prix'];
$qte = $_GET['qte'];

if (isset($_GET['tva'])) {

    $ttc = $prix * $qte * 1.20;
    $message = "TTC";
} else {
    $ttc = $prix * $qte;
    $message = "THT";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Le <?= $message ?> est : <?= $ttc ?>$</h3>
</body>

</html>