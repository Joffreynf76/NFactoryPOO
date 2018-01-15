<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15/01/2018
 * Time: 16:15
 */

class Voitures
{
    public $couleur;
    public $roues = 4;
    public $marque;
    public $masse;

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