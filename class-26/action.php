<?php

require_once 'vendor/autoload.php';

use App\Classes\Student;

if (isset($_GET['page'])) {
  if ($_GET['page'] == 'home') {

    include 'pages/home.php';
  } elseif ($_GET['page'] == 'student') {
    
    $student = new Student();
    $students = $student->getAllStudents();

    include 'pages/student.php';
  }
}