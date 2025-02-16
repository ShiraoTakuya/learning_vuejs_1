<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function __construct() {
    }
    public function viewHome(){
      $csvPath = resource_path('form/register.csv');
      $registerFormData = $this->csv_to_array($csvPath);
      
      $data = [
        "form_register" => $registerFormData,
      ];
      return view('home', ['data' => $data]);
    }
}