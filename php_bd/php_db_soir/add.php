<?php
// print_r($_POST);
$libelle =   $_POST['libelle'];
$prix = $_POST['prix'];
// echo  $libelle;
//connexion avec la base de donnees sur mysql
$dbh = new PDO('mysql:host=localhost;dbname=db11', "root", "");
//prepration d'une requete SQL 
$rp = $dbh->prepare("insert into produit(libelle,prix) values('$libelle',$prix)");

//execution de la requete SQL
$rp->execute();
//redirection vers form.html
header("location:form.html");
