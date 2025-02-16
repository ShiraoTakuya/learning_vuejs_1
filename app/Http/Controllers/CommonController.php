<?php

namespace App\Http\Controllers;

class CommonController extends Controller
{
    public function csv_to_array($csvPath){
      $csvData = array_map('str_getcsv', file($csvPath));
      $headers = array_shift($csvData);
      $jsonData = array_map(function($row) use ($headers) {
          return array_combine($headers, $row);
      }, $csvData);

      return $jsonData;
    }

    public function debug_old(){
      $errors = [];
      foreach (request()->all() as $key => $item) {
          $errors[$key] = "error: " . $key;
      }
      return redirect()->back()->withInput()->withErrors($errors);      
    }
}