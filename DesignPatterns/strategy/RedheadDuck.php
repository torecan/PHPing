<?php

include_once "Duck.php";

class RedheadDuck extends Duck{

    function __construct(){
      self::setQuackBehaviour(new Quack());
      self::setFlyBehaviour(new FlyWithWings());
    }

    function display(){
      echo "this is redhead".PHP_EOL;

    }

}



?>
