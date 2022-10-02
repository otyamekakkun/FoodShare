<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table ='products';//ok

    //練習
    //別に過剰していても入っていれば登録することができる
    protected $fillable =  ['product_name','admin_id','user_id','img_path','price', 'best_by_date','bought','delete'];



}
