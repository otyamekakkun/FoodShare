<?php

namespace App\Http\Controllers\rest\other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rest_Header extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rest.other.otherheader');
    }

}
