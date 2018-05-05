<?php
require_once ('Enseignant.php');

class E extends Enseignant
{

	function __construct($n, $t)
	{
		if($t>96)
		$t=96;
		parent::__construct($n, $t);
	}
	public function heuresComplementaires()
	{
		if($this->getTotal()<=192)
		{
			return 0;
		}

		return $this->getTotal()-192;
	}

	public function paiementComplement()
	{
		return $this-> heuresComplementaires()*(450-(0.18*450));
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