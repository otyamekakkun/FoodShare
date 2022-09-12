<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaikiController extends Controller
{
    //
    public function top_display(){
        return view('haiki.top_display');
    }
}
