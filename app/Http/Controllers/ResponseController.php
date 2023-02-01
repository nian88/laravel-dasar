<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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

    public function download(Request $request){
        $pathToFile =  storage_path('app/public/sample.txt');
        return response()->download($pathToFile);
    }
}
