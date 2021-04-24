<?php
// se connecter a la base de donnees 
function connecter_db()
{
    $cnx = new PDO('mysql:host=localhost;dbname=db11', "root", "");
    return $cnx;
}
// ajouter : fonction permettant d'ajouter un produit  selon le libelle et le prix
function ajouter($libelle, $prix)
{
    $cnx = connecter_db();
    $rp = $cnx->prepare("insert into produit (libelle,prix) values('$libelle',$prix)");
    $rp->execute();
}
function supprimer($id)
{
    $cnx = connecter_db();
    $rp = $cnx->prepare("delete from  produit  where id=$id");
    $rp->execute();
}
function modifier($libelle, $prix, $id)
{
    $cnx = connecter_db();
    $rp = $cnx->prepare("update produit set libelle ='$libelle' ,  prix =$prix where id=$id");
    $rp->execute();
}

function all()
{
    $cnx = connecter_db();
    $rp = $cnx->prepare("select * from produit");
    $rp->execute();
    $resultat = $rp->fetchAll();
    return $resultat;
}
function find($id)
{
    $cnx = connecter_db();
    $rp = $cnx->prepare("select * from produit where id=$id");
    $rp->execute();
    $resultat = $rp->fetch();
    return $resultat;
}
