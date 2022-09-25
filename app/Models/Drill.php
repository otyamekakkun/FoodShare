<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    use HasFactory;
    protected $table ='drills';

    //練習
    //別に過剰していても入っていれば登録することができる
    protected $fillable =  ['title', 'category_name', 'problem0', 
    'problem1', 'problem2','img_path', 'problem3', 'problem4', 'problem5', 'problem6',
     'problem7', 'problem8', 'problem9'];

}
