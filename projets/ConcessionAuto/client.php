<?php

// ENCAPSULATION: sécurité du code

class Client
{
    // Ici on met la variable en private pour éviter toute modification par une tierce personne 
    // On y a accès uniquement dans la class
    //public $entraineur;
    public $envoieinvitation;
    
    private $typedevoiture;
    public $essaiChoix;
    public $prixfinal;
    public $achatvoiture;
    public $demandeclientreduc;
    public $paiementaccepté;
    public $commentairefinal;
    public $nbrale;
  


  
    
    
    // On fait un get et un set pour pouvoir avoir accès à notre private variable en dehors de notre class
    public function settypedevoiture($typedevoiture)
    {
        // Ici on vérifie si notre variable renvoie un string ou non
        if(is_string($typedevoiture)) {
          $this->typedevoiture = $typedevoiture; 
        }  else {
            // Sinon renvoie message d'erreur
            throw new Error("Le nom du type de voiture doit être du texte");
        }  
    }
    
    public function gettypedevoiture($listevoiture, $envoieinvitation, $myVoiture)// Retourne le nom de la voiture $value, plus son prix $key
    {
        
        var_dump($envoieinvitation);
        echo($myVoiture);
        
        if ($envoieinvitation===true)
        
        {
          echo($envoieinvitation);
      
            
             foreach( $listevoiture as $key => $value )
             echo($value);
             echo($myVoiture);
             {
            
             if($myVoiture===$value)
             
             {
                 
               
                 $nbrale = rand(0,100);
                 
                if($nbrale >= 15)
                
                {
                    
                echo $value;
                return $value;
                
                }
                else
                
                {
                    $value = false;
                    return $value;
                    
                    
                }
              
             }
           
             }
        
     
        }
        
       
    }
    
    function Demandereduc($value){
        
        
        if($value === "Mercedes" || $value === "Orange familiale" || $value === "Voiture retro" || $value === "X-5 Cabriolé"){
            $nbrale = rand(0,100);
            if($nbrale >= 40){
                
                $demandeclientreduc = true;
                echo "Je demande une reduc";
                return $demandeclientreduc;
                
            }else{
                
                
                $demandeclientreduc = false;
                echo "Je ne demande pas de reduc";
                return $demandeclientreduc;
                
                
            }
            
            
            
            
            
            
            
        }
        
        
        
        
        
    }
    
    
    
    function Achatclient($prixfinal){
        $nbrale = rand(0,100);
        if($nbrale >= 10){
            $achatvoiture =true;
            return $achatvoiture;
            
            
        }
        else{
            $achatvoiture = false;
            return $achatvoiture;
            
            
        }
    }
        
        
        function Recevoirvoiture($paiementaccepté, $msg){
            
            if (isset($_POST['typevoiture']) && !empty($_POST['typevoiture'])) {
            
            if ($paiementaccepté===true){
                
                
                $commentairefinal="Merci, votre $msg roule super bien";
                return $commentairefinal;
                
                
            }else{
                
                $commentairefinal="Je comprend votre refus pour mon achat de la $msg";
                return $commentairefinal;
                
                
                
                
            }
            
            
            
            
            
            
            
        }
        
        
        }
        
    }
    
    ?>