<?php
include_once ("Vehicules.php");
include_once ("Voitures.php");
include_once ("bidon.php");

bidon::afficherMessage();


$voiture1 = new Voitures();

//echo $voiture1->roues;
$voiture1->couleur = "bleue";
//echo $voiture1->couleur;
//$voiture1->afficherCouleur();

//$voiture1->demarrer();

$voiture2 = new Voitures();
$voiture2->masse = 1000;
$energiec = $voiture2->calculerEnergieCinetique(28);
echo "La voiture a $energiec Joules d'energie cinetique<br>";
$voiture2->masse = 960;
$energiec = $voiture2->calculerEnergieCinetique(28);
echo "La voiture a $energiec Joules d'energie cinetique";