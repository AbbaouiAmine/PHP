<form  method="post">
<input type="radio" value="Sport" name="lo[]">Sport<br>
<input type="radio" value="Musique" name="lo[]">Musique<br>
<input type="radio" value="Jeu" name="lo[]" checked="checked">Jeu<br>
<input type="radio" value="Vouyage" name="lo[]">Vouyage<br>

<input type="submit" value="Envoyez" name="click"><br>

</form>
<?php
if(isset($_POST["lo"]))
{
    echo("Votre loisir favori : ");
    foreach ($_POST["lo"] as $key => $value)
    {
        echo("$value b");
    }
}
?>