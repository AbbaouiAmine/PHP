<?php
class Flotte{
    private $vehicules;
    private $convoi;
    public function __construct()
    {
        $this->vehicules=array(); 
        $this->convoi=false;
    }
    public  function addVihecule(Vehicule $v)
    {
        $this->vehicules[count($this->vehicules)]=$v;
    }
    public function vitesseFlotte()
    {
        if($this->convoi && count($this->vehicules) > 0 )
        {
            $min=$this->vehicules[0];
            foreach($this->vehicules as $c=>$v)
            {
                 if($v->vitesseMaximale()<$min->vitesseMaximale())
                 {
                    $min=$v;  
                 }
            }
            return $min->vitesseMaximale();
        }

        return 0;
    }
    public function toString()
    {
       foreach($this->vehicules as $c=>$v)
       {
           $v->toString();
       }
    }
    public function positionneConvoi()
    {
     $this->convoi=true;
    }
    public function enleveConvoi()
    {
        $this->convoi=false;
    }
}
?>