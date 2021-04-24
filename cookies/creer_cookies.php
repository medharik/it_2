<?php
if (!isset($_COOKIE['age']))
    setcookie('age', 20, time() + 3600 * 24 * 30, '/cookies', 'itsup_di2.fst', true, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation de coockies</title>
</head>

<body>
    <h1>CREATION DE COOKIES </h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error, natus. Commodi eveniet eaque reprehenderit dignissimos eos inventore ea dolorem odio harum? Repudiandae, incidunt nesciunt voluptatibus at error maiores ipsum eaque?</p>

    <form action="consulter.php" method="post">
        Nom : <input type="text" name="nom" id="nom" value="<?php if (isset($_COOKIE['nom'])) echo  $_COOKIE['nom'] ?>">
        Prénom : <input type="text" name="prenom" id="prenom" value="<?php if (isset($_COOKIE['prenom']))  echo $_COOKIE['prenom'] ?>">
        <button>ok</button>

</body>

</html>