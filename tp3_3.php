<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="tp3_3.php" method="post">
        <fieldset>
            <legend>Recherche d'emploi : completez la fiche</legend>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
            <label for="age">Age</label>
            <input type="text" id="age" name="age">
            <br>
            <br>
            <label>Langues pratiques</label>
            <br>
            <select name="lang[]" id="lang" multiple="multiple" size="3">
                <option value="fr">Francais</option>
                <option value="en">Englais</option>
                <option value="alm">Allmand</option>
                <option value="esp">Espagnol</option>
            </select>
            <br>
            <label>Competences informatiques</label>
            <br>
            <label for="Java">Java</label>
            <input type="checkbox" name="progma[]" value="Java">
            <label for="XHTML"> XHTML</label>
            <input type="checkbox" name="progma[]" value="Xhtml">
            <label for="PHP">PHP</label>
            <input type="checkbox" name="progma[]" value="PHP">
            <label for="SQL">SQL</label>
            <input type="checkbox" name="progma[]" value="SQL">

            <br>
            <input type="reset" value="Effacer">
            <input type="submit" value="Envoyer" name="click1">
        </fieldset>

    </form>
    <?php 

if(isset($_POST["click1"]))
{
    echo ("  <fieldset>
    Vous etes :
    <strong>".$_POST["nom"].$_POST["prenom"]."</strong>
    Vous avez
    <strong>".$_POST["age"]."</strong>
    ");
    if(isset($_POST["lang"]))
    {
        echo("Vous parlez :  <br> <ul>");
        foreach($_POST["lang"] as $c=>$v)
        echo("<li>$v</li>");
        echo("</ul>");    
    }
 if(isset($_POST["progma"]))
 {
    echo("Vous aves des competences informatiques en :
    
    <ul>");
   
    foreach ($_POST["progma"] as $k => $v) {
        echo("<li>$v</li>");   
    }

    echo("
    </ul>
    </fieldset>
    ");
 }
}


?>
</body>

</html>