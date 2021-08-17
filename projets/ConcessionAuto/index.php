<?php
    require './patron.php'; 
    // require './vendeur.php'; 
    require './secretaire.php'; 
    require './client.php'; 

    $voitures =  [
        'Mercedes' => '200000',
        'Orange_familiale' => '150000',
        'Mini' => '10000',
        'Mazda' => '25000'
    ];
    
    $directeur = new Directeur();
    $secretary = new Secretaire();
    $client = new Client();
    
    $listevoiture = array(200000 => "Mercedes", 150000 => "Orange_familiale", 10000 => "Mini", 25000 => "Mazda");
    
    $agreeRefuse = $directeur->chance(1);
    
   $invitation = $secretary->form($agreeRefuse);
   
   
   if (isset($_POST['voiture']) && !empty($_POST['voiture'])) {
        $myVoiture = $_POST['voiture'];
     } else {
         $myVoiture = 'Mini';
     };
     
     
     if (isset($myVoiture) && !empty($myVoiture)) {
     
     $value = $client->gettypedevoiture($listevoiture, $invitation, $myVoiture);
     var_dump($value);
     echo "je suis là";
     }
     
     
    
    
    
    
    
    
    
     
    
    
    
    
    
    
    
    
   

    require './views/homePage.phtml';
?>