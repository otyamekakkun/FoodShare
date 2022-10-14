<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable; //メールが送信できるようにする

class Admin extends Authenticatable
{
/*
adminテーブル（コンビニ管理者の情報を登録することができるもの)
*/
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email', 'password','convinience_name','convinience_branch','prefecture','adress'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}