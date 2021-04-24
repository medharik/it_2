<?php
// creer un formulaires permettant la saisie du prix et de la qte et du libelle 
//d'un produit 



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form get</title>
</head>

<body>
    <?php if (isset($_GET['e']) && $_GET['e'] == 'yes') { ?>
        <div style="color:red">
            Erreur , tous les champs sont obligatoires
        </div>
    <?php } ?>
    <?php if (isset($_GET['e']) && $_GET['e'] == 'nombre') { ?>
        <div style="color:red">
            Erreur , ce n'est pas un nombre
        </div>
    <?php } ?>

    <form action="reception_get.php" method="get">
        Libelle : <input type="text" name="libelle" id="libe">
        Prix : <input type="number" name="prix" id="prix">
        Quantite : <input type="number" name="qte" id="qte">
        <button>Valider</button>

    </form>



</body>

</html>