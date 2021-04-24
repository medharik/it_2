<?php
include("functions_commun.php");
$id = $_GET['id'];
$etudiant = find($id, "etudiant");
$p = ($etudiant['genre'] == 'homme') ? "Mr." : "Mlle";
$absences = findByCondition("absence", "etudiant_id=" . $id)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter l'etudiant </title>
    <?php include("_css.php"); ?>
</head>

<body>
    <?php include("_menu.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5 shadow">
                <img src="<?= $etudiant['chemin'] ?>" alt="" class="img-fluid">
                <h4><?= $p . ' ' . $etudiant['nom'] ?> <?= $etudiant['prenom'] ?></h4>
            </div>
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Date</th>
                            <th>Nombre d'heure </th>
                            <th>Details </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $somme = 0;

                        foreach ($absences as $ligne) {
                            $somme += $ligne['nombreHeure'];
                        ?>

                            <tr>
                                <td><?= $ligne['id'] ?></td>
                                <td><?php
                                    $d = new DateTime($ligne['date_absence'], new DateTimeZone("Europe/Amsterdam"));
                                    $mnt = new DateTime();
                                    //  echo "MNT EST " . $mnt->format('d-m-Y H:i');
                                    echo "Le" . $d->format(" d-m-Y à  H:i");
                                    $inter = $mnt->diff($d);
                                    echo "<br> il y a " . $inter->format("%m mois %d jours et %h Heures");
                                    echo "<br>" . $inter->format("il y a %r%ajours");
                                    ?>
                                </td>
                                <td><?= $ligne['nombreHeure'] ?></td>
                                <td><?= $ligne['details'] ?></td>


                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <h4 class="text-danger">Tolal des heures d'absence : <?= $somme ?></h4>

        </div>

    </div>
    <?php include("_js.php"); ?>
</body>

</html>