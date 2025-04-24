<?php

namespace App\classes;

class HelloWorld
{

  public $firstName, $lastName, $x, $y, $z;

  public function __construct()
  {
    $this->firstName = "Hasan";
    $this->lastName = "Maha";

    $this->x = 10;
    $this->y = 20;
    $this->z = 30;
  }

  public function index()
  {
    echo "My Name is " . $this->firstName . " " . $this->lastName;

    echo "<br>";
    echo $this->x + $this->y;
    echo "<br>";
    echo $this->x * $this->y;
    echo "<br>";
    echo $this->x / $this->y;
    echo "<br>";
    echo $this->y % $this->z;
    echo "<br>";

  }

  //Operator
    //Arithmetic Operator -> +, -, %, /, +=, -=, *=. /=, ++, --

    //logical Operator -> //, and &&, or ||, not !

    //conditional Operator -> // ==, ===, !=, !==, >, >=, <, <=

}
