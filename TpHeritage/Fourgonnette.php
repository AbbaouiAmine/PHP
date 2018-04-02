<?php

class Fourgonnette extends Vehicule
{
	private $charge;
	public function __construct($immat,$anne)
	{
		if($charge>3)
		throw exception();

			parent::__construct($immat, $poid=2, $anne);
			$this->charge=$charge;	
	}
	public function vitesseMaximale()
	{
		if($this->charge!=0)
		return 100;

		return 110;
	}
	public function  toString()
	{
	   echo("Fourgonnette (poids = ".parent::getPoids().
			 ") (immatriculation = ".
			 parent::getImma().") vitesse maximale = ".
			 $this->vitesseMaximale()."<br>");
	}
}
?>