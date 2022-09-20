<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testApiController extends Controller
{
    public function index()
    {
        return view('testApi');
    }
}