<?php

//recuperer les donnees depuis le form
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
//connexion à une base de donnees (mysql)
$cnx = new PDO('mysql:host=localhost;dbname=php_db', 'root', '');
// or die("Erreur de connexion");
//preparation de la requete SQL
// $rp = $cnx->prepare("update produit set prix=prix*1.10 where id=2 ");
$rp = $cnx->prepare("insert into produit (libelle,prix) values('$libelle',$prix) ");
//execution de la requete SQL
$rp->execute();
