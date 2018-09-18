<?php
include_once "QuackBehaviour.php";

class Quack implements QuackBehaviour{
    public function quack()
    {
      echo "Quack!";
    }
  }

?>
