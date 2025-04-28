<?php

require_once 'vendor/autoload.php';

use App\Classes\Student;
use App\Classes\Product;
use App\Classes\Category;

$product = new Product();
$category = new Category();
$categories = $category->getAllCategory();

if (isset($_GET['page'])) {
  if ($_GET['page'] == 'home') {

    $products = $product->getAllProducts();
    include 'pages/home.php';
  } elseif ($_GET['page'] == 'student') {

    $student = new Student();
    $students = $student->getAllStudents();

    include 'pages/student.php';
  } elseif ($_GET['page'] == 'details') {
    $product_id = $_GET['id'];
    $details = $product->productDetails($product_id);
    include 'pages/details.php';
  } elseif ($_GET['page'] = 'category') {
    $categoryId = $_GET['id'];
    $products=$product->getProductByCategoryId($categoryId);
    include 'pages/category.php';
  }
}