<?php 

// Affichage 
function afficherT($tab)
{
foreach($tab as $i => $val)
{
  echo ("La valeur Tab[$i] = $val <br/>");
}
}
// test : 
$t=array(1,2,3,10,101457);
afficherT($t);
//===================================================================
// Moyenne
function moyenne($tab)
{
   $somme=0;
   $cpt=0;
   foreach($tab as $i => $val)
   {
    $cpt=$cpt+1;
    $somme+=$val;
   }  
   return ($somme/$cpt);
}
//Test 
$m=moyenne($t);
echo("Moyene est $m <br/>");
// ======================================================================
//NOMBRE SUPERIEUR A 10
function nombreSup10($tab)
{
$nbr=0;
// for($i=0;$i<count($tab);$i++)
// {
    // if($val >= 10)
    // $nbr++;
     
// }
foreach($tab as $i => $val)
{
if($val >= 10)
$nbr++;
}
return $nbr;
}
// Test 
echo("Le nbr sup de 10 est ".nombreSup10($t)."<br/>");
// ========================================================================

// recherche 

function recherche($tab,$val)
{
  foreach( $tab as $i => $v)
  {
    if($v==$val)  
    return $i;
  }
  return -1;
}
// Test 
$indice=recherche($t,145);
echo ("l'indice de la valeur recherche est : $indice <br/>");
//=============================================================================
//max
function maxi($tab)
{
   $max=$tab[0];
   foreach($tab as $i => $v)
   {
    if($v>$max)
    $max=$v;
   }

   return $max;
}
// test
echo("La valeur maximale est : ".maxi($t));
?>