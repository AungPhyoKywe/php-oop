<?php 

abstract class Abstarctshape{
 	
 	public $width;
 	public $height;



 public function __construct($width,$height)
 {
 	$this->width = $width;
 	$this->height=$height;
 }

 	abstract public function getArea();


}


class Rectangle extends Abstarctshape{

	public function __construct($width,$height)
	{
		parent::__construct($width,$height);
	}

	public function getArea(){

		return $this->width*$this->height;
	}


}

$Rectangle=new Rectangle(10,20);

echo $Rectangle->getArea();


$Abstarctshape= new class (12,33)extends Abstarctshape{
    


	public function __construct($width,$height)
	{
		parent::__construct($width,$height);
	}

	public function getArea(){

		return $this->width*$this->height;
	}




};

//$Abstarctshape=new Abstarctshape(12,33);

echo $Abstarctshape->getArea();

/**
 * 
 */
class Triangle
{

	private $head;
	
	public function __construct()
	{
		$this->head=Rectangle::getArea();

	}
	public function_toString(){


		return "this is".$this->head;
	}


}
$Triangle=new Triangle();

echo $Triangle;

















?>