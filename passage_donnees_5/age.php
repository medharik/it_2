<?php
$message = "";
if (isset($_GET['e'])) {
    $e = $_GET['e'];
    if ($e == "nombre") {
        $message = "Ce n'est pas un nombre ";
    }
    if ($e == "requis") {
        $message = "Age est un champs obligatoire ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age </title>
</head>

<body>
    <?= $message ?>
    <form action="reception_age.php" method="get">
        Age : <input type="text" name="age">
        <button>Valider</button>
    </form>

</body>

</html>