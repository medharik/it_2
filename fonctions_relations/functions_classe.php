<?php
// ajouterClasse
function ajouterClasse($nom)
{
    $cnx =   connecter_db();
    $rp = $cnx->prepare("insert into classe(nom) values(?)");
    $rp->execute([$nom]);
}
//supprimerClasse
// supprimer(1,"classe")

function modifierClasse($nom, $id)
{
    //connexion bd
    $cnx =   connecter_db();
    //preparer une sql
    $rp = $cnx->prepare("update classe set nom=?   where id=?");
    //executer
    $rp->execute([$nom, $id]);
}
