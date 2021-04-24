<?php
//recuperer les donnees envoyees par post
$message = "";
$color = "";
if (isset($_GET['age'])) {
    $age = $_GET['age'];
    if (empty($age)) {
        // echo "Age est obligatoire";
        header("location:age.php?e=requis");
        die();
    }
    if (is_numeric($age)) {
        if ($age >= 18) {
            // echo  "Vous etes Majeur ";
            $message =  "Vous etes Majeur ";
            $color = "red";
        } else {
            // echo "Vous etes mineur";
            $message =  "Vous etes mineur";
            $color = "green";
        }
    } else {
        // echo "ce n'est pas un nombre";
        header("location:age.php?e=nombre");
        die();
    }
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
    <h3 style="color:<?= $color ?>"><?= $message ?></h3>

</body>

</html>