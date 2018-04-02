<?php

class Bus extends Vehicule
{
	private $passagers;
	public function __construct($immat, $poid, $anne,$passagers)
	{
	

		if($passagers<1 || $passagers>50)
		throw exception();

			parent::__construct($immat, $poid=20, $anne);
		    $this->passagers=$passagers;
			
	}

	public function vitesseMaximale()
	{
		return 100;
	}
	public function  toString()
	{
	   echo("Bus (poids = ".parent::getPoids().
			 ") (immatriculation = ".
			 parent::getImma().") vitesse maximale = ".
			 $this->vitesseMaximale()."<br>");
	}


}
?>