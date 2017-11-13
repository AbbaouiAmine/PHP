<?php
$clients=array(

    'client1'=>array
    (
        'nom1'=>'lesfer',
        'ville1'=>'casablaca',
        'age1'=>'35'
    ),
    'client2'=>array
    (
        'nom2'=>'karimi',
        'ville2'=>'rabat',
        'age2'=>'47'
    ),
    'client3'=>array
    (
        'nom3'=>'nawi',
        'ville3'=>'tours',
        'age3'=>'58'
    ),
    'client7'=>array
    (
        'nom7'=>'zarkouti',
        'ville7'=>'casa',
        'age7'=>'24'
    )
    
    );
    function affichetab($p)
    {
    echo("<table border=1>");
    echo("<tr><th>client</th>  <th>Nom</th>    <th>Ville</th><th>Age</th></tr>");
     foreach ($p as $key => $value) {
        echo("<tr>");
        echo("<td>".$key."</td>");
        foreach ($value as $k => $v) {
            echo("<td>".$v."</td>");
        }
        echo("</tr>");
     }
    
    echo("</table>");
    
    }
    
    affichetab($clients);
// ==================================================================================
    // Version 2
    function affichetabv2($p)
    {
    echo("<table border=1>");
    echo("<tr> <th>Nom</th>    <th>Ville</th><th>Age</th></tr>");
     foreach ($p as $key => $value) {
        echo("<tr>");
     
        foreach ($value as $k => $v) {
            echo("<td>".$v."</td>");
        }
        echo("</tr>");
     }
    
    echo("</table>");
    
    }
    
    affichetabv2($clients);
?>