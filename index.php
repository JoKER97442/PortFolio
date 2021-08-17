<?php
require "./Projet.php";

$projets = [];

$projets[1] = new Projet("Calculatrice");
$projets[2] = new Projet("Site_CV");
$projets[3] = new Projet("JeuxFlash");
$projets[4] = new Projet("CV.pdf");
$projets[5] = new Projet("ConcessionAuto");


require "index.phtml";
?>