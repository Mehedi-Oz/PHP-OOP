<?php

namespace App\Classes;

Class Home{
  public function index(){
    header('Location:action.php?page=home');
  }
}