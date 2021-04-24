<?php

// ajouter absence 
function ajouter_absence($nombreHeure, $details, $etudiant_id, $date_absence)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("insert into absence(nombreHeure,details,etudiant_id,date_absence)
         values(?,?,?,?)");
        $rp->execute([$nombreHeure, $details, $etudiant_id, $date_absence]);
    } catch (PDOException $e) {
        echo "Erreur d'ajout de l'absence  " . $e->getMessage();
    }
}

//modifier absence 
function modifier_absence($id, $nombreHeure, $details, $etudiant_id)
{
    try {
        $cnx = connecter_db();
        $rp = $cnx->prepare("update absence set nombreHeure=? , details=? , etudiant_id=? where id=?");

        $rp->execute([$nombreHeure, $details, $id]);
    } catch (PDOException $e) {
        echo "Erreur de modification de l'absence  " . $e->getMessage();
    }
}
