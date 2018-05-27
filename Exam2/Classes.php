<?php
abstract class Immobilier{
    private $surface; 
    private $adresse;

    /*constructeur*/
    public function __construct($s,$a)
    {
        $this->surface=$s;
        $this->adresse=$a;
    }
    /*services*/
    public function surfaceImposable()
    {
      return $this->surface;
    } 
    public function toString()
    {
        echo "<br/> - Surface = $this->surface";
        echo "<br/> - Adresse = $this->adresse";
    }
}
class Habitation extends Immobilier{
 private $nbr_piece;
 public function __construct($s,$a,$n)
 {
    parent::__construct($s,$a);
    $this->nbr_piece=$n;
 }
 public function toString()
 {
    parent::toString(); 
    echo "<br/> - Nbr piece = $this->nbr_piece";
 }
}
class Appartement extends Habitation{
 private $etage;
 public function __construct($s,$a,$n,$e)
 {
     parent::__construct($s,$a,$n);
     $this->etage=$e;
 }
 public function toString()
 {
    parent::toString(); 
    echo "<br/> - Etage = $this->etage";
 }
}
class Studios extends Appartement{
    public function __construct($s,$a,$e)
    {
        parent::__construct($s,$a,1,$e);
        $this->etage=$e;
    }
    public function surfaceImposable()
    {
      return parent::surfaceImposable()*0.9;
    }
    
}
class Ecole extends Immobilier{
private $nbr_salle;
private $niveau;
public function __construct($s,$a,$nb,$nv)
   {
       parent::__construct($s,$a);
       $this->$nbr_salle=$nb;
       $this->$niveau=$nv;
   }
public function surfaceImposable(){
        return 0;
   }
}
?>