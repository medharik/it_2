<?php
include "personne.php";
include 'etudiant.php';
//instancier la classe personne pour creer des objets

$ali = new Personne("ALAMI", "ALI", 19, "homme");
$ali->nom = "ALAMI";
// $ali->prenom = "ALI";
$ali->setAge(100);
// $ali->pri = 100;//erreur ?
echo "age de ali est " . $ali->getAge();
$ali->afficher();
$ali->majorite();

$aya = new Personne("ALAOUI", "AYA", 28, "femme");
// $aya->nom = "ALAOUI";
// $aya->prenom = "AYA";
// $aya->age = 3;
$aya->setAge("test");
$aya->afficher();
$aya->majorite();
echo "age de aya est " . $aya->getAge();


$amine = new Personne("AMINI", "AMINE", 56);

$amine->afficher();
$amine->majorite();
$etudiant1 = new Etudiant();
$etudiant1->nom = "zineb";
$etudiant1->setAge(16);
$etudiant1->filiere = "DI";
$etudiant1->afficher();

// echo $amine->hf();
