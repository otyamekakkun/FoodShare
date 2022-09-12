<?php
//実験的要素も絡めている。提出する際は必ず消去することを忘れない。
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrillsController extends Controller
{
    //
    public function new(){
        return view('drills.new');
    }
}
