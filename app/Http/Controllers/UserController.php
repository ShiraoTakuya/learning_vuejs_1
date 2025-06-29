<?php

namespace App\Http\Controllers;
use Inertia\Inertia; // <--- 追加

class UserController extends CommonController
{
    public function __construct() {
    }

    public function view_home(){
      $csvPath = resource_path('form/register.csv');
      $registerFormData = $this->csv_to_array($csvPath);
      
    //   $data = [
    //     'formRoute' => route('debug_old'),
    //     'initialData' => $registerFormData,
    //     'old' => session()->getOldInput(),
    //     'errors' => session('errors'),
    // ];
    $data = [
        'formRoute' => route('debug_old'),
        'initialData' => $registerFormData,
        'old' => session()->getOldInput(),
        'errors' => session('errors') ? session('errors')->getMessages() : [],
    ];
      return Inertia::render('PageComponent', ['data' => $data]);
    }
    
    public function page2(){
      return Inertia::render('Page2');
    }
}

// inertiaの導入手順メモ
// composer require inertiajs/inertia-laravel
// npm install vue@3 @inertiajs/vue3
// 以下を作る
// [app.blade.php]
// @extends('layouts.app')
// @section('content')
// @vite('resources/js/app.js')
// @inertia
// @endsection
//
// Componentのreturn view()をreturn Inertia::render()にする
// 上記は.vueファイルを直接参照させにいく
//