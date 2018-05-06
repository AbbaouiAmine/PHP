<?php
    require_once "Personnel.php";
	require_once "Employee.php";
	require_once "Technicien.php";
	require_once "Vendeur.php";
	require_once "Man.php";

	$n="N1";
	$p="P1";
	$age=23;
	$ar=2015;
	$p=new Personnel();
	$v1=new Vendeur($n,$p,$age,$ar);
	$v2=new Vendeur($n,$p,$age,$ar);
	$t1=new Technicien($n,$p,$age,$ar);
	$m1=new Man($n,$p,$age,$ar);
	$p->ajouter($v1);
	$p->ajouter($v2);
	$p->ajouter($t1);
	$p->ajouter($m1);
	$p->afficher(2);
     echo "<br>";
	$p->afficherMoy();