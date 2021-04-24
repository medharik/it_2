<?php
function ptc($prix, $tva)
{
    $ptc = $prix * (1 + $tva / 100);
    return $ptc;
}

function afficher_date_actuel()
{
    return   date('d-m-Y : h-i-s');
}
// //connexion avec la base de donnees sur mysql
// $dbh = new PDO('mysql:host=localhost;dbname=db11', "root", "");
// //prepration d'une requete SQL 
// $rp = $dbh->prepare("delete from produit where id=$id");

//execution de la requete SQL
// $rp->execute();
// connexion BD
function connecter_db()
{
    $cnx = new PDO('mysql:host=localhost;dbname=db11', "root", "");
    return $cnx;
}
// ajouterProduit
function ajouterProduit($libelle, $prix)
{
    //connexion bd
    $cnx =   connecter_db();
    //preparer une sql
    $rp = $cnx->prepare("insert into produit(libelle,prix) values(?,?)");
    //executer
    $rp->execute([$libelle, $prix]);
}
//supprimerProduit
// supprimerProduit(1)
function supprimerProduit($id)
{
    //connexion bd
    $cnx =   connecter_db();
    //preparer une sql
    $rp = $cnx->prepare("delete from produit where id=?");
    //executer
    $rp->execute([$id]);
}
function modifierProduit($libelle, $prix, $id)
{
    //connexion bd
    $cnx =   connecter_db();
    //preparer une sql
    $rp = $cnx->prepare("update produit set libelle=? , prix=? 
     where id=?");
    //executer
    $rp->execute([$libelle, $prix, $id]);
}

//recuperer un produit depuis la base de donnees en se basant sur son ID
function find($id)
{
    $cnx =   connecter_db();
    $rp = $cnx->prepare("select * from produit where id=? order by id desc  ");
    $rp->execute([$id]);
    $resultat = $rp->fetch(); //extraire 
    return $resultat;
}

// recuperer tous les produits 

function all()
{ //connexion bd
    $cnx =   connecter_db();
    //preparer une sql
    $rp = $cnx->prepare("select * from produit order by id desc  ");
    //executer
    $rp->execute();
    $resultat = $rp->fetchAll(); //extraire tous
    return $resultat;
}
