<?php
abstract class Enseignant
{
	private $nom;
	private $total;

	public function getNom()
	{
      return $this->nom;
	}
	public function getTotal()
	{
      return $this->total;
	}
	 public  function __construct($n, $t)
	{
		$this->nom=$n;
		$this->total=$t;
	}
	public abstract function heuresComplementaires();

	public abstract function paiementComplement();
	public function toString()
	{
		echo "Nom : ".$this->nom.", Horaire : ".$this->total."<br/>";
	}
}
?>