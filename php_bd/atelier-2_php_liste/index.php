<?php
//connexion avec la base de donnees sur mysql
$dbh = new PDO('mysql:host=localhost;dbname=db11', "root", "");
//prepration d'une requete SQL 
$rp = $dbh->prepare("SELECT * FROM PRODUIT order by id desc ");

//execution de la requete SQL
$rp->execute();
//extraire (fetch) le resultat de la requete select
$resultat = $rp->fetchAll();
// echo "<pre>";
// print_r($resultat);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
</head>

<body oncontextmenu="return  false">
    <?php
    include("_menu.php");

    ?>
    <div class="container">
        <h3 class="alert alert-primary text-center">liste des produits</h3>
        <table class="table" id="produits">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">libelle</th>
                    <th scope="col">prix</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultat as $ligne) { ?>
                    <tr>
                        <th scope="row"><?= $ligne['id'] ?></th>
                        <td><?= $ligne['libelle'] ?></td>
                        <td><?= $ligne['prix'] ?></td>
                        <td>
                            <a onclick="return  confirm('voulez vous vraiment supprimer ce produit ?')" href="delete.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-danger">S</a>
                            <a href="" class="btn btn-sm btn-warning">M</a>
                            <a href="show.php?id=<?= $ligne['id'] ?>" class="btn btn-sm btn-primary">Consulter</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#produits').DataTable();
        });
    </script>
</body>

</html>