<?php 
//supprimer le produit 
// recuperer l'id dans le lien (get)
$id=$_GET['id'];//4
//connexion avec la base de donnees sur mysql
$dbh = new PDO('mysql:host=localhost;dbname=db11', "root", "");
//prepration d'une requete SQL 
$rp = $dbh->prepare("delete from produit where id=$id");

//execution de la requete SQL
$rp->execute();


header("location:index.php");


?>