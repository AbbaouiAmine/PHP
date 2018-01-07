<?
include_once("prixttc.php");
include_once("prixtotal.php");
include_once("show.php");

if(isset($_POST["click"]))
{
    //function montantcmd($nom,$prix,$quantite,$tva)
    montantcmd($_POST["produit"],$_POST["prix"],$_POST["quantite"],$_POST["tva"]);

    $prixHT=prixtotal($_POST["prix"],$_POST["quantite"]);
    $ttc=prixttc($_POST["prix"],$_POST["tva"]);
    $total=prixtotal($ttc,$_POST["quantite"]);
    show($_POST["produit"],$prixHT,$total);
}
?>

<form  method="post">
<h1>Montant d'une commande</h1>
<br/>
<label for="tx1">Nom Produit</label><input type="text" name="produit" id="tx1">
<br/>
<label for="tx2">Prix Unitaire</label><input type="text" name="prix" id="tx2">
<br/>
<label for="tx3">Quantite</label><input type="text" name="quantite" id="tx3">
<br/>
<label for="tx4">TVA</label><input type="text" name="tva" id="tx4">
<br/>
<input type="submit" name="click" value="Calculer">
</form>
