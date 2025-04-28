<?php

namespace App\Classes;

class Category
{

  public $categories = [];
  public function __construct()
  {
    $this->categories = [
      [
        "id"=>1,
        "name"=>"Mobile",
      ],
      [
        "id"=>2,
        "name"=>"Laptop",
      ],
      [
        "id"=>3,
        "name"=>"Panjabi",
      ],
      [
        "id"=>4,
        "name"=>"Graphics Card", 
      ]
    ];
  }
}