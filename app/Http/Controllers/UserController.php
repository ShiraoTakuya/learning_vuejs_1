<?php

namespace App\Http\Controllers;

class UserController extends CommonController
{
    public function __construct() {
    }
    public function view_home(){
      $csvPath = resource_path('form/register.csv');
      $registerFormData = $this->csv_to_array($csvPath);
      
      $data = [
        "form_register" => $registerFormData,
      ];
      return view('home', ['data' => $data]);
    }
}