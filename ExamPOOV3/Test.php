<?php
	/**
	 * Created by ABBAOUI Amine
	 * Date: 5/25/18
	 * Time: 9:50 PM
	 */
	include_once ('Client.php');
	include_once ('Commande.php');
	include_once ('Fournisseur.php');

//	test
	$identifiant=1;
	$nom="Nom1";
	$prenom="Prenom1";
$c1=new Client($identifiant,$nom,$prenom);
	$id=12;
	$prix=200;
$cm1=new Commande($id,$prix);
$c1->nouvelleCoomande($cm1);
$f=new Fournisseur(4,"Fnom");

echo("<br>################AVANT######################<br>");
$c1->toString();
$f->toString();


$f->choix($c1);
echo("<br>################Apres######################<br>");
$c1->toString();
$f->toString();


