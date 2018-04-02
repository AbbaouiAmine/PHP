<?php

abstract class Vehicule
{

	private $anne_achat;
	private $imma;
	private $poids_vide;

	public function __construct($immat, $poid, $anne)
	{
		$this->anne_achat=$anne;
		$this->imma=$immat;
		$this->poids_vide=$poid;
	}
	public function getPoids(){
		return $this->poids_vide;
	}
	public function getImma(){
		return $this->imma;
	}
	
	public abstract  function toString();
	public abstract  function vitesseMaximale();
}
?>