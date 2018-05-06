
<?
class Technicien extends Employee {
    private $h;

    public function __construct($n,$p,$age,$ar)
    {
        parent::__construct($n,$p,$age,$ar);
        $this->h=0;
    }
    public function calculerHoraire($i)
    {
        if($i%2==0)
            return 30;
        return 42;

    }

}
?>