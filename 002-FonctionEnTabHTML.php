
<?php

$personne= array (
        'mdupond' => array
        (
            'prenom'=>'martin',
            'nom'=>'dupond',
            'age'=>25,
            'ville'=>'paris'
        ),
        'jm'=>array
        (
            'prenom'=>'jean',
            'nom'=>'martin',
            'age'=>20,
            'ville'=>'villetaeuse'
        ),
        'toto'=>array
        (
            'prenom'=>'tom',
            'nom'=>'tonge',
            'age'=>18,
            'ville'=>'epinay'
        ),
        'arn'=>array
        (
            'prenom'=>'arnaud',
            'nom'=>'dupond',
            'age'=>33,
            'ville'=>'paris'
        ),
        'email'=>array
        (
            'prenom'=>'emilie',
            'nom'=>'ailta',
            'age'=>46,
            'ville'=>'villetaeuse'
        ),
        'dask'=>array
        (
            'prenom'=>'damien',
            'nom'=>'askier',
            'age'=>7,
            'ville'=>'villetaeuse'
        ),

    );
function affichetab($p)
{
echo("<table border=1>");
echo("<tr><th>Prenom</th>  <th>Nom</th>  <th>Age</th>  <th>Ville</th></tr>");
 foreach ($p as $key => $value) {
    echo("<tr>");
    foreach ($value as $k => $v) {
        echo("<td>".$v."</td>");
    }
    echo("</tr>");
 }

echo("</table>");

}

affichetab($personne);

?>