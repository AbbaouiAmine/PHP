<?php
require_once ('Enseignant.php');





class IE extends Enseignant
{

	function __construct($n, $t)
	{
		parent::__construct($n, $t);
	}

	public function heuresComplementaires()
	{
		return $this->getTotal();
	}

	public function paiementComplement()
	{
		return $this-> heuresComplementaires()*450;
	}

	public function toString()
	{
	  parent::toString();
	  echo " HeuresComplementaires : ".$this->heuresComplementaires();
	  echo ", PaiementComplement : ".$this->paiementComplement();
	  echo "<br/>";
	}

}
?>