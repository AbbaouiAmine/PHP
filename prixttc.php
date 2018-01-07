<?php
function prixttc($prix,$tva=20)
{
return ($prix*(1+($tva/100)));
}
?>