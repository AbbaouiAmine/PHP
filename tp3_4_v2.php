<?php
$loisirs=array("sport","musique","jeu","voyage","tkharbi9a");
?>


<form  method="post">
<?php
foreach($loisirs as $c=>$v)
{
    if($v!="jeu")
echo('<input type="radio" value="'.$v.'" name="lo[]">'.$v.'<br>');
else
echo('<input type="radio" value="'.$v.'" name="lo[]" checked>'.$v.'<br>');
}
?>


<!-- <input type="radio" value="Musique" name="lo[]">Musique<br>
<input type="radio" value="Jeu" name="lo[]" checked="checked">Jeu<br>
<input type="radio" value="Vouyage" name="lo[]">Vouyage<br> -->

<input type="submit" value="Envoyez" name="click"><br>

</form>
<?php
if(isset($_POST["lo"]))
{
    echo("Votre loisir favori : ");
    foreach ($_POST["lo"] as $key => $value)
    {
        echo("$value");
    }
}
?>