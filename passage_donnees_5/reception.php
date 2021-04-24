<?php
// PHP va creer un tableau (variable implicite) : $_POST
//print_r($_POST);
// print_r($_GET);
// echo $_POST['passe'];
$x = 0;
// if (isset($y)) echo "x existe<br>";
// if (empty($y)) echo "x est vide";
if (isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];

    $b = $_POST['b'];
    if (!empty($a) && !empty($b)) {
        if (is_numeric($a) && is_numeric($b)) {
            $total = $a * $b;
            echo "le produit  de $a * $b  = $total";
        } else {
            echo "ce n'est pas un nombre <br>";
        }
    } else {
        echo "tous les champs sont obligatoires ";
    }
} else if (isset($_POST['email']) &&  isset($_POST['passe'])) {
    $email = $_POST['email'];
    $passe = $_POST['passe'];
    echo "Email : $email, Mot de passe : $passe";
} else {
    echo "On a pas recu de donnees ";
}
