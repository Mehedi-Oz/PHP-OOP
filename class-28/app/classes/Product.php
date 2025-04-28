<?php

namespace App\Classes;
use App\Classes\Category;

class Product
{

  public $products = [], $category, $categoryById, $productsByCategory = [];

  public function __construct()
  {
    $this->products = [
      [
        'id' => 1,
        'category_id' => 1,
        'product_name' => 'Asus ROG Phone I',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, eveniet voluptatibus posst pariatur! Corporis, earum nulla! Tempora, iste.',
        'price' => '1,20000 Taka',
        'image' => '1 (1).jpg'
      ],
      [
        'id' => 2,
        'category_id' => 1,
        'product_name' => 'S23 Ultra',
        'description' => 'Aliquint pariatur! Corporis, earum nulla! Tempora, iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. ',
        'price' => '1,20000 Taka',
        'image' => '1 (2).jpg'
      ],
      [
        'id' => 3,
        'category_id' => 2,
        'product_name' => 'Asus ROG Strix',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptatibus possimus quasi sint pariatur! Corporis, earum nulla! Tempora, iste.',
        'price' => '1,20000 Taka',
        'image' => '1 (3).jpg'
      ],
      [
        'id' => 4,
        'category_id' => 2,
        'product_name' => 'Lenovo S-21132',
        'description' => 'Lliquid, eveniet voluptatibus possimus quasi sint pariatur! Corporis, earum nulla! Tempora, iste.',
        'price' => '1,20000 Taka',
        'image' => '1 (4).jpg'
      ],
      [
        'id' => 5,
        'category_id' => 3,
        'product_name' => 'Afgani Panjabi',
        'description' => 'Ipsum dolor sit amet consectetur adipisicing elit. Aliquid, evenietr! Corporis, earum nulla! Tempora, iste.',
        'price' => '1,500 Taka',
        'image' => '1 (5).jpg'
      ],
      [
        'id' => 6,
        'category_id' => 3,
        'product_name' => 'Manadi Panjabi',
        'description' => 'sit amet consectetur adipisicing elit. Aliquid, evi sint pariatur! Corporis, earum nulla! Tempora, iste.',
        'price' => '1,400 Taka',
        'image' => '1 (6).jpg'
      ],

      [
        'id' => 7,
        'category_id' => 4,
        'product_name' => 'Asus 4090TI',
        'description' => 'Fsectetur adipisicing elit. Aliquid, eveniet voluptatibus possimus quasi sint pariatur! Corporis, earum nulla! Tempora, iste.',
        'price' => '1,96000 Taka',
        'image' => '1 (7).jpg'
      ],
      [
        'id' => 8,
        'category_id' => 4,
        'product_name' => 'Rx6000xt',
        'description' => 'Gamet consectetur adipisicing elit. Aliquid, eveniet voluptatibus possimus quasi sint pariatur! Corporis, earum nulla! Tempora, iste.',
        'price' => '66,000 Taka',
        'image' => '1 (8).jpg'
      ],

    ];
  }

  public function getAllProducts()
  {
    return $this->products;
  }

  public function productDetails($id)
  {
    $products = $this->getAllProducts();
    foreach ($products as $product) {
      if ($product['id'] == $id) {
        $this->category = new Category();
        $this->categoryById = $this->category->categoryById($product['category_id']);
        $product['category_name'] = $this->categoryById['category_name'];
        return $product;
      }
    }
  }

  public function getProductByCategoryId($id)
  {
    $products = $this->getAllProducts();
    foreach ($products as $product) {
      if ($product['category_id'] == $id) {
        $this->productsByCategory[] = $product;
      }
    }
    return $this->productsByCategory;
  }

}