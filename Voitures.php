<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15/01/2018
 * Time: 16:15
 */

class Voitures extends Vehicules
{

    public $roues = 4;
    public $marque;


    public function demarrer(){
        echo "Je demarre";
    }

    public function afficherCouleur(){
        echo $this->couleur;
    }

    public function calculerEnergieCinetique($v) {
        return 0.5* $this->masse* ($v** 2);

    }
}