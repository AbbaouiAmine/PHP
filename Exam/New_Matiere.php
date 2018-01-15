<?php
if(isset($_POST["ajouter"]) && isset($_POST["num"]))
{
    $pdo=new PDO("mysql:host=localhost;dbname=dbecole","root","");
    $stm=$pdo->prepare("insert into Matiere values(:p1,:p2,:p3,:p4,:p5)");
    $data=array(
        ":p1"=>$_POST["num"],
        ":p2"=>$_POST["nom"],
        ":p3"=>$_POST["coef"],
        ":p4"=>$_POST["n_ens"],
        ":p5"=>$_POST["p_ens"]
    );
    $stm->execute($data);
    
    if($stm->rowCount()!=0)
    {
        echo "Matiere bien ajoutée";
    }
}
else
echo "Verifier le nom";
?>