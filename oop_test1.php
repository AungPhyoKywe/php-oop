<?php  

class person{

	public $name;
	private $age;
	protected $gender;


	public function __construct($name,$age,$gender)
	{
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
	}

	public function setAge($age){

		$this->age=$age;
	}

	public function getAge(){


		return $this->age;
	}

	public function eat(){


		echo "Person is everyday eat";
	}

	public function sleep(){

		echo "Person is everyday sleep";
	}


}
/**
 * 
 */
/**
 * 
 */
class aungaung extends person
{
	public $height="50kg";
	public function __construct($name,$age,$gender)
	{
		parent::__construct($name,$age,$gender);
	}

	
	public function eat($text){

		echo "aung aung eating with hand".$text;
	}

	public function sleep(){

		echo "aung aung sleep";
	}



}
$person=new aungaung("aung","23","male");

echo $person->eat("slowly");
echo "<br>";
// $person->setAge("23");
// echo $person->getAge();
// echo "<br>";
// echo $person->getAge();
// echo "<br>";
echo $person->name;
echo "<br>";











?>