<?php
require './secretaire.php';
require './client.php';
require './patron.php';


class Conseiller {

    public $Prixvoiture ;
    public $ClientReduc ;
    public $DemandePatron ;
    public $Choixpatron ;
    public $PrixvoitureFinal ;
    public $Paiement ;

function DemandeReduction($ClientReduc){
    if ($ClientReduc === true){
        return $Prixvoiture;

    }

}

function PrixFinal($Choixpatron, $Prixvoiture){
    if ($Choixpatron === true)

    $PrixvoitureFinal = $Prixvoiture*(rand(0, 20)/100) ;
    echo $PrixvoitureFinal

    else {
        $PrixvoitureFinal = $Prixvoiture ;
    }
    return $PrixvoitureFinal ;

}

function Livraison($Paiement){

    if ($Paiement === true ){
        $livraisonvoiture = true;
        echo " voiture livré" ;
        ;
        
    }
    else {
        $livraisonvoiture = false;
        echo "NIK";  
    }
    return $livraisonvoiture ;
    
}

}

?>