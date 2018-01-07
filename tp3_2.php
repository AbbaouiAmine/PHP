

<form method="post">
<label>N1 : </label> <input type="text" name="n1" value="<?php if(isset($_GET["n1"])) echo $_GET["n1"]; ?>"> <br/>
<label>N2 : </label><input type="text" name="n2" value="<?php if(isset($_GET["n2"])) echo $_GET["n2"]; ?>"> <br/>
<label>Operation : </label>
<select name="op">
<option value="+">+</option>
<option value="*">*</option>
<option value="/">div</option>
</select>
<input type="submit" name="click" value="=">
</form>

<?php
if(isset($_POST["click"]))
{
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $op=$_POST["op"];
    if($op=="+")
    $r=$n1+$n2;
    else if($op=="*")
    $r=$n1*$n2;
    else if($op=="div")
    {
    if($n2!=0)
    $r=$n1/$n2;
    else 
    $r="Impo";    
}
     echo("Resultat : ".$r);
     header("location:tp3_2.php?n1=$n1&n2=$n2&r1=$r");
}
else if(isset($_GET["r1"])){ 
    echo $_GET["r1"];9
}
?>