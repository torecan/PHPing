<?php

//include_once "FlyBehaviour.php";
include_once "FlyWithWings.php";
//include_once "QuackBehaviour.php";
include_once "Quack.php";

abstract class Duck{

   function __construct(){

  }

  public abstract function display();

  public function setFlyBehaviour($fb){
    $this->flyBehaviour=$fb;
  }
  public function setQuackBehaviour($qb){
    $this->quackBehaviour=$qb;
  }

  public function performFly(){
    $this->flyBehaviour->fly();
  }

  public function performQuack(){
    $this->quackBehaviour->quack();
  }

}

?>
