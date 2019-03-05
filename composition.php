<!-- <?php   

class Head {
    private static $instance = NULL;

    private function __construct(){}

    public static function getInstance() {
        $traces = debug_backtrace();
        if (strcmp($traces[1]['class'], 'Human')) {
            echo "<br>Only human has head"; // Exception can be thrown here
            return NULL;
        }
        if (!static::$instance) static::$instance = new self();
        return static::$instance;
    }

    public function __toString() {
        return 'Head';
    }
}

class Human {
    private $head;

    public function __construct() {
        $this->head = Head::getInstance();
    }

    public function __toString() {
        return 'I have ' . $this->head;
    }
}

class Plant {
    private $head;

    public function __construct() {
        $this->head = Head::getInstance();
    }
}

$human = new Human();
echo $human;

$superman = new Plant();












?> -->


 
<?php  

class Foo {


    public static $my_static = 'foo';

    public static $my;


    public function staticValue($my) {

    return self::$my;

      }
   }
        print Foo::$my_static . "\n";

        $foo = new Foo();

        print $foo->staticValue("puci") . "\n";






?> 


 <!-- <?php   

class Animal{


    public function play(){


        echo "Ha ha ";
    }
}

class cat{


    public  static $cat;

    public function __construct()
    {
        return self::$cat = Animal::play();
    }
}

$com=new cat();

echo $com->$cat;


?>  -->