<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getData(Request $request){
        dd($request);
        return $request;
    }
}
