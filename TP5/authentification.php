<?php
if(isset($_POST["click"]))
{

    $pdo=new PDO("mysql:host=localhost;dbname=actualite","root","");
    $s=$pdo->prepare("select * from membres where pseudo=:p1 and pass=:p2");
    $data=array(":p1"=>$_POST["pseudo"],":p2"=>$_POST["pass"]);
    $s->execute($data);
    if($s->rowCount()>0)
    {
        header("location:espace.php?pseudo=".$_POST["pseudo"]);
    }
    else
    {
    
    echo("mot de pass incorrect");
    }
}

?>
