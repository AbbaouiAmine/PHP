
<?php
if(isset($_POST["inscrire"]))
              {
                      if(   
        !empty($_POST["pseudo"]) && 
        !empty($_POST["pass1"])  && 
        !empty($_POST["pass2"])  && 
        !empty($_POST["nom"])    &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["s"])      &&
        !empty($_POST["email"])
        )
    { 

        if($_POST["pass1"]==$_POST["pass2"])
{
    
   $pdo=new PDO("mysql:host=localhost;dbname=actualite","root","");
  
   $s=$pdo->prepare("insert into membres(nom,prenom,pseudo,pass, email,date_inscription,sexe)
                                 values(:p1,:p2,:p3,:p4,:p5,:p6,:p7)"
     );
   $data =array(    ":p1"=>$_POST["nom"],
                    ":p2"=>$_POST["prenom"],
                    ":p3"=>$_POST["pseudo"],
                    ":p4"=>$_POST["pass1"],
                    ":p5"=>$_POST["email"],
                    ":p6"=>date("y-m-d"),
                    ":p7"=>$_POST["s"]
);
$s->execute($data);
header("location:authentification.html");

}
else
{
    echo("Resaisir le mot de pass");
}

    }
    else
    {
        echo("Les camps sont obligatoires");
    }
}
?>