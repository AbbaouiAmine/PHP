

<?php
abstract class Employee{

    private $nom;
    private $prenom;
    private $age;
    private $ar;

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function getAr()
    {
        return $this->ar;
    }
    public  function __construct($n,$p,$age,$ar)
    {
      $this->nom=$n;
      $this->prenom=$p;
      $this->age=$age;
      $this->ar=$ar;
    }
    abstract public function calculerHoraire($i);

}
