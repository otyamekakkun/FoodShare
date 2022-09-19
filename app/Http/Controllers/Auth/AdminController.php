<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
      // ここから追加
      public function __construct()
      {
          $this->middleware('auth:admin');
      }
  
      public function index()
      {
          return view('admins.home');
      }
      // ここまで追加
}
