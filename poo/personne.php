<?php
class Personne
{


    //POO : 
    // ENCAPSULATION  :
    // (PROCTECTION DES DONNEES )
    // comment : 
    // en declarant private les attibuts
    // et en autorisant leurs acces (lecture (get), ecriture (set))


    // les attributs 
    public $nom;
    public $prenom;
    private  $age;
    public $genre;
    // private   $pri;
    // protected $pro;
    /* modificateur d'accès : le degré  de visibilité*/
    // le constructeur : une methode initialisant les attrbuts  de l'objet
    public function __construct($nom = "", $prenom = "", $age = 0, $genre = "homme")
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->genre = $genre;
    }




    //les methodes / operations /message/ fonction/ programme
    public function afficher()
    {
        echo  "le nom est " . $this->nom . ", prenom est " . $this->prenom . ", age est " . $this->age . "<br>";
    }
    public function majorite()
    {
        if ($this->age > 18) {
            echo "majeur" . $this->hf() . "<br>";
        } else {
            echo "mineur" . $this->hf() . "<br>";
        }
    }

    private function  hf()
    {
        if ($this->genre == "homme") {
            return "";
        } else {
            return "e";
        }
    }
    public function   setAge($age)
    {
        if (is_numeric($age) && $age > 0) {

            $this->age = $age;
        } else {
            echo "Age est incorrect<br>";
        }
    }

    public function  getAge()
    {
        return $this->age;
    }
}
