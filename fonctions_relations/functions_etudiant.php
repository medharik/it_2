<?php
function ajouterEtudiant($nom, $prenom, $genre, $classe_id, $chemin)
{
  $cnx =   connecter_db();
  $rp = $cnx->prepare("insert into etudiant(nom,prenom,genre,classe_id,chemin) values(?,?,?,?,?)");
  $rp->execute([$nom, $prenom, $genre, $classe_id, $chemin]);
}

function modifierEtudiant($nom, $prenom, $genre, $classe_id, $id)
{
  //connexion bd
  $cnx =   connecter_db();
  //preparer une sql
  $rp = $cnx->prepare("update etudiant set nom=?,prenom=?,genre=?,classe_id=? 
      where id=?");
  //executer
  $rp->execute([$nom, $prenom, $genre, $classe_id, $id]);
}

function  allWithClasse()
{
  //connexion bd
  $cnx =   connecter_db();
  //preparer une sql
  $rp = $cnx->prepare("select e.*,c.nom as nom_classe from etudiant e
   join classe c on e.classe_id=c.id  ");
  //executer
  $rp->execute();
  $resultat = $rp->fetchAll(); //extraire tous
  return $resultat;
}
