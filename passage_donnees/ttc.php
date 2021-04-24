<?php
//$_GET = ['prix'=>9000,'qte'=>10]


$ttc = $_GET['prix'] * $_GET['qte'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ttc</title>
</head>

<body>
    <h3>Le TTC est : <?= $ttc ?>DHS</h3>

</body>

</html>