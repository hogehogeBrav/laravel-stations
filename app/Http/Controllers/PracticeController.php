<?php

namespace App\Http\Controllers;

class PracticeController extends Controller
{
  public function sample()
  {
    return 'practice';
  }
  public function sample2()
  {
    $test = 'practice2';
    return $test;
  }
  public function sample3()
  {
    $test = 'test';
    return $test;
  }
}