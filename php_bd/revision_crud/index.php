<?php
//connexion bd
$link = new PDO('mysql:host=localhost;dbname=dbrevision', 'root', '');
//preparer sql
$rp = $link->prepare("select * from employee");
//executer sql
$rp->execute();
//extraire (fetch)
$employees = $rp->fetchAll();
// print_r($employees);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des employes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3>liste des employes</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom complet</th>
                    <th scope="col">date de naissance</th>
                    <th scope="col">salaire</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee) { ?>
                    <tr>
                        <th scope="row"><?= $employee['id'] ?></th>
                        <td><?php echo  $employee['nom'] ?> <?= $employee['prenom'] ?></td>
                        <td><?= $employee['date_naissance'] ?></td>
                        <td><?= $employee['salaire'] ?></td>
                        <td>
                            <a onclick="return confirm('supprimer?') " href="delete.php?id=<?= $employee['id'] ?>" class="btn btn-sm btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>