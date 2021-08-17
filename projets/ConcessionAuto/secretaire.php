<?php



class Secretaire 
{

public $invitation;
public $sendedPayment;
public $achat;

// Si la case oui est coché, envoie un mail, sinon rien.
public function form($agreeRefuse)
{
	if (isset($_POST['validation']) && !empty($_POST['validation'] && $agreeRefuse))
	{
		if (($_POST['validation'] === "true"))
		{
			$invitation = true;
			echo "La secretaire envoie un mail au client <br>";
			return $invitation;
		}
		else
		{
			$invitation = false;
			echo "La secretaire n'envoie rien <br>";
			return $invitation;
		}
	}
}

// Si achat = oui, prévient le conseiller que l'achat est bien effectué.
public function validPayment($achat)
{
	if ($achat === true)
	{
		$sendedPayment = true;
		echo "Dis au conseiller : Achat effectué <br>";
		return $sendedPayment;
	}
	else
	{
		$sendedPayment = false;
		echo "Dis au conseiller : Achat annulé <br>";
		return $sendedPayment;
	}
}
}


?>

