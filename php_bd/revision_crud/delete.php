<?php
//recuperer l'id de l'employee depuis le lien 

$id = $_GET['id']; //la valeur de l'id dans le lien

//connexion bd
$link = new PDO('mysql:host=localhost;dbname=dbrevision', 'root', '');
//preparer sql
$rp = $link->prepare("delete from employee where id=$id");
//executer sql
$rp->execute();

//redirection vers la page accueil
header('location:index.php');
