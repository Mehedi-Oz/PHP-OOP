<?php

namespace App\Classes;

class Test
{

  public $students, $student, $value, $item;

  public function __construct()
  {
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
    foreach ($this->students as $this->student) {
      echo "<br>";
      foreach ($this->student as $this->value) {
        if (is_array($this->value)) {
          foreach ($this->value as $this->item) {
            echo $this->item;
          }
        }
        else{
          echo $this->value;
        }
      }
    }
  }
}