<?php

namespace App\Classes;

class Student
{
  public $students = [];

  public function __construct()
  {
    $this->students = [
      [
        "id" => 1,
        "name" => "Muhammad",
        "phone" => '0123918203',
        "email" => [
          "email-1" => "muhammad1@gmail.com",
          "email-2" => "muhammad2@gmail.com"
        ],
      ],
      [
        "id" => 2,
        "name" => "Mehedi",
        "phone" => '1209329132',
        "email" => [
          "email-1" => "mehedi1@gmail.com",
          "email-2" => "mehedi2@gmail.com"
        ],
      ],
      [
        "id" => 3,
        "name" => "Hasan",
        "phone" => '0192831292',
        "email" => [
          "email-1" => "hasan1@gmail.com"
        ],
      ],
    ];
  }

  public function getAllStudents()
  {
    return $this->students;
  }
}