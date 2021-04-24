<?php
// include 'personne.php';

class Etudiant extends Personne
{
    public $filiere;
    //redefinition de la methode afficher
    public function afficher()
    {
        parent::afficher();
        echo "<br> la filiere est " . $this->filiere;
    }
}
