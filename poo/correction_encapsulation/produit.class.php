<?php
class Produit
{
    //attributs
    private $libelle;
    private $prix;
    private $qteStock;
    //constructeur : 
    function __construct($libelle = "", $prix = 0, $qteStock = 0)
    {
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qteStock = $qteStock;
    }

    //setters 
    public function  set_prix($prix)
    {
        if (is_numeric($prix) && $prix > 0) {
            $this->prix = $prix;
        } else {
            echo "Valeur du prix est  incorrecte";
        }
    }
    public function  set_qte_stock($qteStock)
    {
        if (is_numeric($qteStock) && is_int($qteStock) && $qteStock > 0) {
            $this->qteStock = $qteStock;
        } else {
            echo "Valeur de la qte en stock est  incorrecte";
        }
    }
    public function  set_libelle($libelle)
    {
        $this->libelle = $libelle;
    }

    // getters
    public  function get_prix()
    {
        return $this->prix;
    }
    public  function get_qte_stock()
    {
        return $this->qteStock;
    }
    public  function get_libelle()
    {
        return $this->libelle;
    }


    //les methodes 

    public function afficher()
    {
        echo $this->libelle . " coute " . $this->prix . ", la qte en stock est " . $this->qteStock . "<br>";
    }

    public function exists()
    {
        if ($this->qteStock > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function  calculer_ptc()
    {

        $ptc = $this->prix * 1.20;
        return $ptc;
    }






    //methodes 








}
