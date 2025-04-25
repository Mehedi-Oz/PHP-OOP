<?php

namespace App\Classes;

class Home
{
  public function index()
  {
    header('Location:action.php?page=home');
  }
}
