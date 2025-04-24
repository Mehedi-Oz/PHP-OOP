<?php

namespace App\Classes;

class Hello
{

  public $x, $y, $arr, $arr2, $students;
  public function __construct()
  {
    // $this->x = 10;
    // $this->y = 20;

    // $this->arr = array(
    //   0 => 'apple',
    //   1 => 'orange'
    // );

    // $this->arr2 = array(
    //   'a' => 'mango',
    //   'b' => 'strawberry',
    //   3 => 'Mi',
    //   4 => 'Nokia'
    // );

    $this->students = [
      [
        'id' => 1,
        'name' => "Mehedi",
        'address' => "Muhammadpur",
        'email' => "mehedi@gmail.com"
      ],
      [
        'id' => 2,
        'name' => "Hasan",
        'address' => "Syamoli",
        'email' => [
          "hasan100@gmail.com",
          "hasan200@gmail.com"
        ]
      ],
      [
        'id' => 3,
        'name' => "Muhammad",
        'address' => "Thakurgaon",
        'email' => "muhammad@gmail.com"
      ],
    ];

  }

  public function index()
  {

    // for ($this->x; $this->x <= $this->y; $this->x++) {
    //   echo $this->x . "<br>";
    // }


    // print_r($this->arr);
    // echo "<br>";
    // var_dump($this->arr);

    // echo "<br>";
    // print_r($this->arr2);
    // echo "<br>";
    // var_dump($this->arr2);

    foreach ($this->students as $this->student) {
      echo "<br>";
      foreach ($this->student as $this->key=>$this->info) {
        if (is_array($this->info)) {

          foreach ($this->info as $this->key=>$this->item) {
            echo $this->key . "=" . $this->item . "<br>";
          }

        } else {
          echo $this->key . "=" . $this->info . "<br>";
        }
      }
    }

  }
}