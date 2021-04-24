<?php
//supprimer le produit 
// recuperer l'id dans le lien (get)
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
//connexion avec la base de donnees sur mysql
$dbh = new PDO('mysql:host=localhost;dbname=db11', "root", "");
//prepration d'une requete SQL 
$rp = $dbh->prepare("insert into produit (libelle,prix) values('$libelle',$prix)");

//execution de la requete SQL
$rp->execute();


header("location:index.php");
