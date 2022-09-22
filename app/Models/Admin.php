<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable; //メールが送信できるようにする

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password','convinience_name','convinience_branch','adress'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}