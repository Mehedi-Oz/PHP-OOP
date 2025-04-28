<?php

namespace App\Classes;

class Category
{

  public $categories = [], $category;
  public function __construct()
  {
    $this->categories = [
      [
        "id" => 1,
        "category_name" => "Mobile",
      ],
      [
        "id" => 2,
        "category_name" => "Laptop",
      ],
      [
        "id" => 3,
        "category_name" => "Panjabi",
      ],
      [
        "id" => 4,
        "category_name" => "Graphics Card",
      ]
    ];
  }

  public function getAllCategory()
  {
    return $this->categories;
  }

  public function categoryById($catId)
  {
    $this->category = $this->getAllCategory();
    foreach ($this->category as $value) {
      if ($value['id'] == $catId) {
        return $value;
      }
    }
  }
}