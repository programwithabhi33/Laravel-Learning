<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Common extends Controller
{
    public function index(Request $request){
        echo $request->name;
    }
}
