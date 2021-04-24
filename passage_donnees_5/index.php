<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <!-- les methodes d'evoi HTTP : GET , POST
    GET : envoie les données (avec name) dans le lien (url)
    POST : les donnees ne sont pas envoyées dans le lien , 
    mais sont cachées dans le corps du message  -->
    <form action="reception.php" method="post">
        Email : <input type="text" name="email">
        Mot de passe : <input type="password" name="passe">
        <button>Valider</button>
    </form>
    <hr>

    <form action="reception.php" method="post">
        A : <input type="number" name="a" required>
        B : <input type="number" name="b">
        <button>CALCULER LE PRODUIT * </button>
    </form>

</body>

</html>