<?php
require_once 'Client.php';
require_once 'Compte.php';

$c1=new Client(1,"Belehmer");
$c2=new Client(2,"Tani");

//===================================
$c1->toString();
$c2->toString();

$c2->setNom("Selami");
$c2->toString();

//==================================
$compte1=new Compte(23456,$c1);
$compte1->credit(1000);
$compte1->toString();

$compte2=new Compte(6314,$c2);
$compte2->debit(3000);
$compte2->toString();
?>
