<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReply; //追記
use Illuminate\Support\Facades\Mail;

class MailableController extends Controller
{
    //以下追記
    public function index() //コンタクトフォームの表示
    {
        return view('contact.index');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        Mail::to('karasisuki4902@gmail.com')
              ->send(new ContactReply());

        return back()->withInput($request->only(['name']))
                     ->with('sent', '送信完了しました。');    //送信完了を表示
    }
}