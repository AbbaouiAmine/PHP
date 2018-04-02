<?php
require_once ('Vehicule.php');

class Camion extends Vehicule
{
	private $charge;
	
	public function __construct($immat, $anne,$charge)
	{
		if($charge >6)
		throw exception();

		parent::__construct($immat, $poid=5, $anne);
		$this->charge=$charge;
	}
	public function vitesseMaximale()
	{
		if($this->charge <=3)
		return 80;
		
		return 90;
	}
	public function  toString()
	{
	   echo("Camion (poids = ".parent::getPoids().
			 ") (charge = ".$this->charge.") (immatriculation = ".
			 parent::getImma().") vitesse maximale = ".
			 $this->vitesseMaximale()."<br>");
	}



}
?>