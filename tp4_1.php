<!DOCTYPE html>
<?php
//Tableau $projet
$projet=array(
                "GPW1" => array("descp"=>"Gestion de projet Wafalmmo","chp"=>"nami","dd"=>"01/01/16","df"=>"01/02/16"),
                "GRH003" => array("descp"=>"Gestion RH","chp"=>"alami","dd"=>"02/06/15","df"=>"02/06/16") 
                //"" => array("descp"=>"","chp"=>"","dd"=>"//","df"=>"//")         
             );

//Tableau $tache
$tache=array(
               "tgp01" => array("desct"=>"specifications fonctionelles","ddt"=>"01/01/16","dft"=>"06/01/16","etat"=>"nouvelle","idp"=>"GPW1","mat"=>"t001"),
               "tgp02" => array("desct"=>"specifications techniques","ddt"=>"07/01/16","dft"=>"10/01/16","etat"=>"en cours","idp"=>"GPW1","mat"=>"t015"),
               "trh01" => array("desct"=>"specifications fonctionelles","ddt"=>"05/06/15","dft"=>"25/06/15","etat"=>"cloture","idp"=>"GRH003","mat"=>"ab01")
               //"" => array("desct"=>"","ddt"=>"//","dft"=>"//","etat"=>"","idp"=>"","mat"=>"")
            );
$ing=array(
               "t001" => array("nom"=>"alaoui","prenom"=>"karima"), 
               "t015" => array("nom"=>"habti","prenom"=>"said"),
               "ab01" => array("nom"=>"salimi","prenom"=>"mohamed")
               // "" => array("nom"=>"","prenom"=>"")
          );
?>

<html lang="en">
<head>
    <title>TP 4 </title>
    <style>
    .head{
    margin: 10px;
    padding: 10px;
    border: solid 1px #a3d13d;
    background-color: #88db7f;
}
    </style>
</head>
<body>
<div class="head">   
<form  method="GET">
<label for="mat">Matricule de l'ingenieur</label> 
    <input type="text" id="mat" name="mat_ing"><br>
    <label for="id">Identifiant Projet</label> 
    <input type="text" id="id" name="pro_id"><br>
    <input type="radio" name="choix" id="ch1"> 
    <label for="ch1" value="et">et</label>
    <input type="radio" name="choix" value="ou" id="ch2" checked="checked"> 
    <label for="ch2">ou</label><br>
<input type="submit" value="Recherche" name="rech">
</form>
</div>

 
<?php
if(isset($_GET["rech"]))
{
    $pro_id=$_GET["pro_id"];
    $mat_ing=$_GET["mat_ing"];
    $choix=$_GET["choix"];
echo('
<table border="1">
<tr> 
<th>Tache</th>
<th>Date Debut</th>
<th>Date fin</th>
<th>Etat</th>
<th>Projet</th>
<th>Ingenieur responsavle</th>
</tr>
');
foreach($tache as $cle => $val)
{
    $test=false;
    if($choix=="et")
    $test=($val["idp"]==$pro_id && $val["mat"]==$mat_ing);
    else if($choix=="ou")
    $test=($val["idp"]==$pro_id || $val["mat"]==$mat_ing);
echo("<tr>");
if(!$test)
continue;

foreach($val as $c => $v)
{

    if($c != "idp" && $c != "mat")
    {
        echo("<td>$v</td>");
    }
    else
    {
        if($c=="idp")
        echo("<td>".$projet[$v]["descp"]."</td>");
        else if($c=="mat")
        echo("<td>".$ing[$v]["nom"]." ".$ing[$v]["prenom"]."</td>");
    }
}
echo("</tr>");
}
echo("</table>");
}
?>


</body>
</html>