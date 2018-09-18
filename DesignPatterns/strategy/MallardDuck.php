<?php

include_once "Duck.php";

class MallardDuck extends Duck{

    function __construct(){
    self::setFlyBehaviour(new FlyWithWings());
    self::setQuackBehaviour(new Quack());

    }

    function display(){
      echo "this is mallard";

    }

}



?>
