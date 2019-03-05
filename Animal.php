<!--  <!-- <?php 


 abstract class Animal{

   public $name;
   public $age;



 abstract  public function eat();
}




abstract class canine extends Animal{


 abstract public function eat();
}

class dog extends canine implements pet{

   public function shakeHand(){

   	echo "Dog is giving hand!";
   }


	public function eat(){


		echo "Dog is eating chicken";
	}
}
abstract class felline extends Animal{


	 abstract public function eat();





}

Interface pet{


	function shakeHand();
}

class wolf extends felline{


	public function eat(){

		echo "wolf is eating chicken!";
	}
}


class cat extends felline implements pet{

	function shakeHand(){

		echo "cat is giving hand!";
	}

	public function eat(){


		echo "Cat is eating fish";
	}
}
$feline=new cat;
$dog=new dog;
$wolf=new wolf;
echo $feline->eat();
echo $feline->shakeHand();
echo "<br>";
echo $dog->shakeHand();
echo "<br>";









 ?>  -->

 <!-- <?php
class BaseClass {
public function Hello() {
echo 'BaseClass Hello function <br> ';
}
}
trait OtherCls {
public function Hello() {
parent::Hello();
echo 'Trait Hello function!';
}
}
class CompName extends BaseClass {
use OtherCls;
}
$obj = new CompName();
$obj->Hello();
?> -->




<!-- <?php 
class car{

public function drive(){

	echo "Driving slowly";

}
}
trait OtherCar{

	public function drive(){

		parent::drive();
		echo "Driving faster";
	}
}
class marcidi extends car{


	use OtherCar;



}
$obj=new marcidi;
echo $obj->drive();




?> -->








<?php
 class person implements permit{
private  $name;
private $age;

public function setAge($age){

	$this->age=$age;


}

public function getAge(){

	return $this->age;
}

public function setName($name){


	$this->name=$name;
}

public function getName(){

	return $this->name;
}

}

interface permit{

 public function getName();
 public function setName();
}

$user=new person;
permit $u1=$user;

 //$user->setAge("12");
 echo $u1->getAge;

?> -->

<?php   

class Animal{


	public function play(){


		echo "Ha ha ";
	}
}

class cat{


	public $cat;

	public function __construct()
	{
		$this->cat = Animal::play();
	}
}

$com=new cat();

echo $com->cat;


?>