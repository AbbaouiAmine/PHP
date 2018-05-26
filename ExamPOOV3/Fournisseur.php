<?php


	class Fournisseur
	{
      private $id;
      private $nom;
      private $ca;
      private $cT;
      public function toString()
      {
		  echo("<br>=========================================<br>");
		 echo("<br>Foursnisseur<br>"); 
      	echo("Id =".$this->id."Nom = ".$this->nom.", CA = ".$this->ca);
      	echo("<br>");
	      echo("Commande Taitee: <br/>");
	      for ($i=0;$i<count($this->cT);$i++)
	      {
		      $this->cT[$i]->toString();
	      }
      }
      public function __construct($id,$nom)
      {
      	$this->id=$id;
      	$this->nom=$nom;
		  $this->ca=0;
		  $this->cT=array();
      }
      public function choix(Client $client)
      {
      	$cA=&$client->listCommandesEnAttentes();
		$max=0;
		for ($i=0;$i<count($cA);$i++)
		{
			if($cA[$max]<$cA[$i])
			{
				$max=$i;
			}
		}
		$cA[$max]->setEtat("Traitee");
		$this->cT[]=$cA[$max];
		$this->ca+=$cA[$max]->getPrix();
		$cT=&$client->listCommandesTraitee();
		$cT[]=$cA[$max];
		for ($i=$max;$i<count($cA)-1;$i++)
		{
			$cA[$i]=$cA[$i+1];
		}
		unset($cA[$i]);
      }
	}