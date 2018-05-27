<?php
include_once('Classes.php');
//$imm=new Immobilier(); //Cannot instantiate abstract class

$s=200;
$a="Adresse1";
$e=3;
$st=new Studios($s,$a,$e);
$st->toString();
echo "<br/> - SurfaceImposable = ".$st->surfaceImposable();
?>