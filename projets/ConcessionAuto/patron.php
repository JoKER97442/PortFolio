<?php




/*****************************************************************************
 * CLASS
 * ***************************************************************************/
// On créer une class directeur ou fonction directeur.
class Directeur{

    public $random;
    public $client;
    public $agreeRefuse;

    public function chance($client)
    {
        $per_chance = rand(1,100);
        
        if ($per_chance >= $client) 
        {
            echo "Le client est abonné";
            $agreeRefuse = true;
            return $agreeRefuse;
        } 
        else 
        {
            echo "Le client n'est pas abonné";
            $agreeRefuse = false;
            return $agreeRefuse;
        }
    
    }
    public function acceptReduction() 
    {
        if ($nombre_aleatoire = mt_rand(0,100) > 66)
        {
            $random = true;
            return $random;
        }
        else 
        {
            $random = false;
            return $random;
        }
    }
}


?>
