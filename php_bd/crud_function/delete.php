<?php
include("functions.php");
$id = $_GET['id']; // id=4
supprimer($id);
header("location:index.php");
