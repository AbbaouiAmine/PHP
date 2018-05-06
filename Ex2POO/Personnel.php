<?
	require_once "Employee.php";
/*
 * Class Personnel represente un tableau des employees
 */
	class Personnel{
		/*
		 * @var  TableauEmployee
		 */
	private $Temp;


	public function __construct()
	{
		$this->Temp=array();
	}

	/*
	 *  @param $e Employee un nouveau employee
	 */
	public function ajouter(Employee $e)
	{
		$this->Temp[count($this->Temp)]=$e;
	}
	/*
	 * @param $s Entier numero de la semaine
	 */
	public function afficher($s)
	{
		for ($i=0;$i<count($this->Temp);$i++)
		{
			echo " ".$this->Temp[$i]->calculerHoraire($s);
		}
	}

	public function afficherMoy()
	{
		$somme=0;
		for ($i=0;$i<count($this->Temp);$i++)
		{
			$hm=0;
			for ($j=1;$j<5;$j++)
			$hm += $this->Temp[$i]->calculerHoraire($j);

			$hm/=4;
			$somme+=$hm ;
		}
		echo $somme/count($this->Temp);
	}
}
?>