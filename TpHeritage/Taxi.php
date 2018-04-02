<?php
require_once ('Vehicule.php');


class Taxi extends Vehicule
{
    private $passagers;
    public function __construct($immat, $anne,$passagers)
	{
	

		if($passagers<1 || $passagers>4)
		throw exception();

		parent::__construct($immat, $poid=2, $anne);
		$this->passagers=$passagers;
		
	}

    public function vitesseMaximale()
	{
		return 130;
	}
	public function  toString()
	{
	   echo("Taxi (poids = ".parent::getPoids().
			 ") (immatriculation = ".
			 parent::getImma().") vitesse maximale = ".
			 $this->vitesseMaximale()."<br>");
	}


}
?>