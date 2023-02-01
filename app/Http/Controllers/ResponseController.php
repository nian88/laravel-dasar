<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function response(Request $request){
        return response("Hello Response");
    }

    public function json(Request $request){
        return response()->json([
            'name'      => 'Azhar Nian',
            'company'   => 'Agsatu',
        ]);
    }
}
