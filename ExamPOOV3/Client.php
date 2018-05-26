<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 5/25/18
	 * Time: 9:54 PM
	 */

	class Client
	{
		private $identifiant;
		private $nom;
		private $prenom;
		private $cA;
		private $c;
		private $cT;
		public function toString()
		{
			echo("ID = ".$this->identifiant.", Nom = ".$this->nom.", Prenom :".$this->prenom);
			echo("<br>");
		
			echo("<br>===========================================================================");
			echo("<br>Commande en attente : <br>");
			for ($i=0;$i<count($this->cA);$i++)
			{
				$this->cA[$i]->toString();
			}
			echo("<br>===========================================================================");
			echo("<br>Commande Taitee: <br/>");
			for ($i=0;$i<count($this->cT);$i++)
			{
				$this->cT[$i]->toString();
			}
			echo("<br>===========================================================================");
			echo("<br>Commande : <br/>");
			for ($i=0;$i<count($this->c);$i++)
			{
				$this->c[$i]->toString();
			}
		}
		public function __construct($identifiant,$nom,$prenom)
		{
			$this->identifiant=$identifiant;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->c=array();
			$this->cA=array();
			$this->cT=array();
		}
		public function nouvelleCoomande(Commande $commande)
		{
			$this->c[]=$commande;
			$this->cA[]=$commande;
		}
		public function &listCommandesEnAttentes()
		{
          return $this->cA;
		}
		public function &listCommandesTraitee()
		{
			return $this->cT;
		}


	}