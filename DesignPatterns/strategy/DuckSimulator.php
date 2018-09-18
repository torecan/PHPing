<?php

include_once "Duck.php";
include_once "MallardDuck.php";
include_once "RedheadDuck.php";

  $mallard=new MallardDuck();

  $mallard->performFly();
  $mallard->display();
  $mallard->performQuack();

  $redheadDuck=new RedheadDuck();


  $redheadDuck->display();
  $redheadDuck->performFly();
  $redheadDuck->performQuack();

?>
