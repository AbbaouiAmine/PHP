<?php
function show ($nom,$prixHT,$total)
{
 echo("
    <p>Montant de la commande : $nom</p>
    <p>Prix HT : $prixHT</p>
    <p>Prix TTC :$total </p>
  ");
}
?>