<?php
if(isset($_POST["recherche"]) && isset($_POST["nom_mat"]))
{
    $pdo=new PDO("mysql:host=localhost;dbname=dbecole","root","");

    $stm=$pdo->prepare("select * from Matiere where nom_mat= :p1 ");

    $data=array(":p1"=>$_POST["nom_mat"]);
    $stm->execute($data);
    
    if($stm->rowCount()!=0)
    {
    $res=$stm->fetchAll(PDO::FETCH_ASSOC);
    echo '<table border="1">';
    echo"<tr>
    <th>NUM mat</th>
    <th>NOM</th>
    <th>Coef</th>
    <th>Nom  ens</th>
    <th>Prenom ens</th>
    </tr>";
    foreach ($res as $c => $v) {
        echo "<tr>";
     foreach ($v as $c1 => $v1) {
        echo "<td>$v1</td>";
     }
     echo "</tr>";
    } 
    echo '</table>';
    }
}
else
echo "Nim non trouvé!!";
?>