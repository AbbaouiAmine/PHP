<?php
	/**
	 * Created by PhpStorm.
	 * User: root
	 * Date: 5/25/18
	 * Time: 10:00 PM
	 */

	class Commande
	{
		private $id;
		private $prix;
		private $etat;
		public function toString()
		{
			echo("Id = ".$this->id.", Prix = ".$this->prix.", Etat = ".$this->etat);
		}
		public function __construct($id,$prix)
		{
			$this->etat="nouvelle";
			$this->id=$id;
			$this->prix=$prix;
		}
		public function getEtat()
		{
			return $this->etat;
		}
		public function getId()
		{
			return $this->id;
		}
		public function getPrix()
		{
			return $this->prix;
		}
		public function setEtat($etat)
		{
			$this->etat = $etat;
		}
		public function setId($id)
		{
			$this->id = $id;
		}
		public function setPrix($prix)
		{
			$this->prix = $prix;
		}

	}