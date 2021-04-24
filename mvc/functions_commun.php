<?php
function connecter_db()
{
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=dbrelation', "root", "");
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $cnx;
    } catch (PDOException $e) {
        echo "Erreur de connexion " . $e->getMessage();
    }
}
//supprimer(1,"absence")
function supprimer($id, $table)
{
    try {

        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("delete from $table where id=?");
        //executer
        $rp->execute([$id]);
    } catch (PDOException $e) {
        echo "Erreur de suppression $table " . $e->getMessage();
    }
}
//recuperer un classe depuis la base de donnees en se basant sur son ID
function find($id, $table)
{
    try {

        $cnx =   connecter_db();
        $rp = $cnx->prepare("select * from $table where id=? order by id desc  ");
        $rp->execute([$id]);
        $resultat = $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur de recherche " . $e->getMessage();
    }
}

// recuperer tous les classes 
//all("etudiant")
function all($table)
{
    try {
        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("select * from $table order by id desc  ");
        //executer
        $rp->execute();
        $resultat = $rp->fetchAll(); //extraire tous
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur dans all" . $e->getMessage();
    }
}
//findByCondition("etudiant","classe_id=2")
function findByCondition($table, $condition)
{
    try {


        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("select * from $table where $condition  order by id desc  ");
        //executer
        $rp->execute();
        $resultat = $rp->fetchAll(); //extraire tous
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur dans all" . $e->getMessage();
    }
}


function absenceParEtudiant()
{
    try {
        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("select a.*, e.nom,e.prenom from absence a join etudiant e on a.etudiant_id=e.id   order by a.id desc  ");
        //executer
        $rp->execute();
        $resultat = $rp->fetchAll(); //extraire tous
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur dans all" . $e->getMessage();
    }
}

//etudiant + classe + somme des absences
function etudiant_classe_somme()
{
    try {
        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("select e.*,c.nom as nom_classe,
        sum(a.nombreHeure) as somme_absence from etudiant e left join absence a on e.id=a.etudiant_id join classe c on c.id=e.classe_id group by e.id,e.nom,e.prenom, e.genre,c.nom");
        //executer
        $rp->execute();
        $resultat = $rp->fetchAll(); //extraire tous
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur dans etudiant_classe_somme" . $e->getMessage();
    }
}


function ajouter_person($nom, $chemin)
{
    try {

        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("insert into  person(nom,chemin) values(?,?)");
        //executer
        $rp->execute([$nom, $chemin]);
    } catch (PDOException $e) {
        echo "Erreur d'ajout de person " . $e->getMessage();
    }
}

//$infos=$_FILES['chemin']
function uploader($infos, $dossier = "images")
{
    if (!is_dir($dossier)) {
        mkdir($dossier);
    }

    $tmp = $infos['tmp_name'];
    $original_nom = $infos['name']; //atar.jpg
    $fichier_infos = pathinfo($original_nom);
    $extension = $fichier_infos['extension'];
    $taille = filesize($tmp) / (1024 * 1024);
    $autorise = ['jpeg', 'jpg', 'gif', 'png', 'webp'];
    if (!in_array($extension, $autorise)) {
        die("ce n'est pas une image");
    }
    if ($taille > 8) {
        die("ce fichier est trop volumineux (>8Mo)");
    }


    $new_name = time() . $original_nom;
    $chemin = $dossier . "/" . $new_name;
    move_uploaded_file($tmp, $chemin);
    return $chemin;
}

//classe 

function ajouter_classe($nom)
{
    try {

        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("insert into classe(nom) values(?)");
        //executer
        $rp->execute([$nom]);
    } catch (PDOException $e) {
        echo "Erreur ajout classe " . $e->getMessage();
    }
}

//fin classe 

//etd
function ajouterEtudiant($nom, $prenom, $genre, $classe_id, $chemin)
{
    $cnx =   connecter_db();
    $rp = $cnx->prepare("insert into etudiant(nom,prenom,genre,classe_id,chemin) values(?,?,?,?,?)");
    $rp->execute([$nom, $prenom, $genre, $classe_id, $chemin]);
}
function modifierEtudiant($nom, $prenom, $genre, $classe_id, $chemin, $id)
{
    $cnx =   connecter_db();
    $rp = $cnx->prepare("update etudiant set nom=?, prenom=?, genre=?,classe_id=?,chemin=? where id=?");
    $rp->execute([$nom, $prenom, $genre, $classe_id, $chemin, $id]);
}
function modifierEtudiantSansChemin($nom, $prenom, $genre, $classe_id, $id)
{
    $cnx =   connecter_db();
    $rp = $cnx->prepare("update etudiant set nom=?, prenom=?, genre=?,classe_id=? where id=?");
    $rp->execute([$nom, $prenom, $genre, $classe_id, $id]);
}

// fin etd

function ajouterAbsence($date_absence, $nombreHeure, $etudiant_id, $details)
{
    $cnx =   connecter_db();
    $rp = $cnx->prepare("insert into absence(date_absence,nombreHeure,etudiant_id,details) values(?,?,?,?)");
    $rp->execute([$date_absence, $nombreHeure, $etudiant_id, $details]);
}



function absenceetetudiant()
{
    try {
        //connexion bd
        $cnx =   connecter_db();
        //preparer une sql
        $rp = $cnx->prepare("select a.*, e.nom,e.prenom from absence a join  etudiant e on a.etudiant_id=e.id order by a.id desc  ");
        //executer
        $rp->execute();
        $resultat = $rp->fetchAll(); //extraire tous
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur dans all" . $e->getMessage();
    }
}
