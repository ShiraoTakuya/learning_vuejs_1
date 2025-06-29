<?php

namespace App\Inertia;

class VueConstructor
{
    public static function DynamicFormComponent()
    {
        // $counter = session()->get('counter', 0) + 1;
        // session()->put('counter', $counter);
        // return response()->json([
        //     'counter' => $counter,
        // ]);
        
        $response = "this is api return";
        return response()->json([
            'response' => $response,
        ]);
    }
}