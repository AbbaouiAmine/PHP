<?php
require_once ('Camion.php');
require_once ('Taxi.php');
require_once ('Flotte.php');
$f=new Flotte();
$f->positionneConvoi();


$immat="TA 622 JX";
$poid=5;
$anne=1990;
$charge=3;

$c1=new Camion($immat,$anne,$charge);

$immat="TB 455 UY";
$poid=5;
$anne=1990;
$charge=5;
$c2=new Camion($immat,$anne,$charge);

$immat="RD 877 HG";
$poid=2;
$anne=1990;
$t1=new Taxi($immat,$anne,3);

$f->addVihecule($c1);
$f->addVihecule($c2);
$f->addVihecule($t1);
echo ("Vitesse de flotte : ".$f->vitesseFlotte()."<br>");
$f->toString();


?>