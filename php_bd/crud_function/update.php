<?php
include("functions.php");
$libelle = $_POST['libelle']; // id=4
$prix = $_POST['prix']; // id=4
$id = $_POST['id']; // id=4
modifier($libelle, $prix, $id);
header("location:index.php");
