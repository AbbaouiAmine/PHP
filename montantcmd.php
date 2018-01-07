<?php
include_once("show.php");
include_once("prixttc.php");
include_once("prixtotal.php");

function montantcmd($nom,$prix,$quantite,$tva)
{
$prixHT=prixtotal($prix,$quantite);
$ttc=prixttc($prix,$tva);
$total=prixtotal($ttc,$quantite);
show($nom,$prixHT,$total);
}
?>