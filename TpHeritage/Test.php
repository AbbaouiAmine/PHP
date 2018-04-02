<?php
require_once "Vehicule.php";
require_once "Camion.php";
require_once "Taxi.php";

$immat="TA 622 JX";
$poid=5;
$anne=1990;
$charge=3;

$c1=new Camion($immat,  $anne,$charge);

$immat="TB 455 UY";
$poid=5;
$anne=1990;
$charge=5;
$c2=new Camion($immat, $anne,$charge);

$immat="RD 877 HG";
$poid=2;
$anne=1990;
$t1=new Taxi($immat, $anne,4);


$c1->toString();
$c2->toString();
$t1->toString();

?>