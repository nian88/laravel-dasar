<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        return "Data yang dikirim adalah : {$name}";
    }
}
