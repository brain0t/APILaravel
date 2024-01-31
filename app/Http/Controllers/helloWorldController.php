<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class helloWorldController extends Controller
{
    public function hello(Request $request)
    {
        return response()->json(data:[
            "request" => $request->bar,
        ]);
    }

    public function hello_post($name)
    {
        return response()->Json(data:[
            "oi" => "Hello world",
            "Nome" => "{$name}"
        ]);
    }

}
