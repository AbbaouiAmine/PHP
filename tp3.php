<?php
$pers=array(
            'pseudo1'=>array('prenom'=>'Mohamed','nom'=>'Dari','age'=>25,'ville'=>'rabat'),
            'pseudo2'=>array('prenom'=>'Jamila','nom'=>'niwa','age'=>20,'ville'=>'casa'),
            'pseudo3'=>array('prenom'=>'Tarik','nom'=>'Tangi','age'=>18,'ville'=>'agadir')
           );
          
?>

<form method="get">
<label for="pseudo1 ">Entrer votre pseudo</label><input type="text" name="pseudo">
<input type="submit" name="click" value="chercher">
</form>

<?php
if(isset($_GET['click']))
{
    $pseudo=$_GET["pseudo"];
    $c=false;
    foreach($pers as $key => $value)
    {
        if($key==$pseudo)
        {
            echo('<table border="1">
                  <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Ville</th>
                  </tr>
                  <tr>
            ');
            foreach ($value as $k => $v) 
            {
               echo("<td>$v</td>");
            }
            $c=true;
            echo("</tr></table>");
        }
    } 
    if(!$c)
    {
        echo("<table border=1>
                               <tr>
                                 <th>Desole votre pseudo n'apparait pas</th>
                               </tr>
              </table>
           ");
    }
}
?>